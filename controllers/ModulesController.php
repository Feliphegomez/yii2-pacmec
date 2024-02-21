<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Default controller for the `pacmec` module
 */
class ModulesController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
