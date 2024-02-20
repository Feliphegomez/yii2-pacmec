<?php

namespace app\modules\fronted\controllers;

use app\modules\system\models\LoginForm;
use app\modules\system\models\Menu;
use app\modules\system\models\Page;
use app\modules\system\models\ResendVerificationEmailForm;
use app\modules\system\models\SignupForm;
use app\modules\system\models\User;
use app\modules\system\models\UserForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `fronted` module
 */
class DefaultController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'about', 'contact', 'page', 'profile', 'profiles'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'about', 'contact'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['profile', 'profiles'],
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    throw new NotFoundHttpException('No tienes los suficientes permisos para acceder a esta página.', 403);
                }
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function __construct($id, $module, $config)
    {
        parent::__construct($id, $module, $config ?? []);
        Menu::addMenuSite();
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Renders the about view for the module
     * @return string
     */
    public function actionAbout()
    {
        if (($model = Page::findOne(['slug' => 'about-me'])) !== null) {
            // $model->scenario = 'myaccount';
            // if ($model->load(Yii::$app->request->post())) {
            //     if ($model->save()) {
            //         \Yii::$app->session->setFlash('success', "Datos actualizados con exito!");
            //         return $this->refresh();
            //     }
            // }
            
            return $this->render('page-view', [
                'model' => $model
            ]);
        }

        throw new yii\web\NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionSignup() {
        $this->layout = 'sign';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'sign';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionProfile($id = null)
    {
        $id = $id ?? Yii::$app->user->identity->id;
        
        if (($model = User::findOne(['id' => $id])) !== null) {
            // return $this->render('@app/modules/system/views/users/view', [
            return $this->render('profile', [
                'model' => $model,
            ]);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Renders the accoun for user view for the module
     * @return string
     */
    public function actionMyAccount()
    {
        if (($model = UserForm::findOne(['id' => Yii::$app->user->identity->id])) !== null) {
            $model->scenario = 'myaccount';
            if ($model->load(Yii::$app->request->post())) {
                if ($model->save()) {
                    \Yii::$app->session->setFlash('success', "Datos actualizados con exito!");
                    return $this->refresh();
                }
            }
            
            return $this->render('my-account', [
                'model' => $model
            ]);
        }

        throw new yii\web\NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Renders the accoun for user view for the module
     * @return string
     */
    public function actionProfiles()
    {
        return $this->render('profiles');
    }
}
