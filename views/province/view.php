<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\Province */

$this->title = $model->provinceId;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-view">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Html::encode($this->title) ?>
            <p class="pull-right">
                <?= Html::a('Update', ['update', 'id' => $model->provinceId], ['class' => 'btn btn-primary btn-xs']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->provinceId], [
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
					'provinceId',
					'provinceCode',
					'provinceName',
					'geographyId',
                ],
            ]) ?>
        </div>
    </div>

</div>
