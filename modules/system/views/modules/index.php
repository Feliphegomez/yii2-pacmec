<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\system\models\User $model */

// $module = \Yii::$app->getModule('forum');
$modules = \Yii::$app->getModules(false);

$this->title = "Modulos";
$this->params['breadcrumbs'][] = ['label' => 'System', 'url' => ['/system/default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-group list-group-flush">
    <?php foreach ($modules as $module_key => $module) {
        // $module[] = $module;
        // echo "K:: {$module_key} :: " . json_encode($module) . "<br />\n";
        ?>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?= $module_key ?></h5>
                <small>3 days ago</small>
            </div>
            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
            <small><?= json_encode($module) ?></small>
        </a>
    <?php } ?>
</div>
