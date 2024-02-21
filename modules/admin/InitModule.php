<?php 

namespace app\modules\admin;

use Yii;

/**
 * pacmec module definition class
 */
class InitModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config.php');
        // custom initialization code goes here
        Yii::$app->params = array_merge($this->params, Yii::$app->params);
        Yii::setAlias('@fronted_assets', dirname(dirname(__DIR__)) . '/modules/fronted/assets');
    }
}