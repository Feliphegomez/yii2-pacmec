<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\system\models\Option $model */

$this->title = 'Nueva Opcion';
$this->params['breadcrumbs'][] = ['label' => 'System', 'url' => ['/system/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Opciones', 'url' => ['/system/options/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="option-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
