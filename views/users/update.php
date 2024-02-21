<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\system\models\User $model */

$this->title = 'Editando usuario: ' . "@{$model->username} - Usuario # {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'System', 'url' => ['/system/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "@{$model->username} - Usuario # {$model->id}", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="user-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
