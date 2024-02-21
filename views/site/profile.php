<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = "@{$model->username} - Usuario # {$model->id}";

if (Yii::$app->user->can('admin')) $this->params['breadcrumbs'][] = ['label' => 'Perfiles', 'url' => ['/profiles']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view h-100">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <?= $this->render('@app/modules/system/views/users/_profile', [
        'model' => $model,
    ]) ?>
</div>

