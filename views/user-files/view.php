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

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Html::encode($this->title) ?>
            <p class="pull-right">
                <?= Html::a('Update', ['update', 'id' => $model->userFilesId], ['class' => 'btn btn-primary btn-xs']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->userFilesId], [
                    'class' => 'btn btn-danger btn-xs',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
					'userFilesId',
					'userId',
					'url:url',
                ],
            ]) ?>
        </div>
    </div>

</div>
