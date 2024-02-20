<?php

namespace app\modules\system\controllers;

use Yii;
use app\modules\system\models\UserForm;
use yii\web\Controller;

/**
 * Default controller for the `pacmec` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
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
            
            return $this->render('/users/my-account', [
                'model' => $model
            ]);
        }

        throw new yii\web\NotFoundHttpException('The requested page does not exist.');
    }
}
