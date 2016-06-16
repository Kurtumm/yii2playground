<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\UserFiles */

$this->title = $model->userFilesId;
$this->params['breadcrumbs'][] = ['label' => 'User Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-files-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userFilesId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userFilesId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'userFilesId',
            'userId',
            'url:url',
        ],
    ]) ?>

</div>
