<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\system\models\User $model */

$this->title = 'Crear usuario';
$this->params['breadcrumbs'][] = ['label' => 'System', 'url' => ['/system/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['/system/users/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
