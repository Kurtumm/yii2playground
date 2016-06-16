<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\Geography */

$this->title = $model->geographyId;
$this->params['breadcrumbs'][] = ['label' => 'Geographies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geography-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->geographyId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->geographyId], [
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
            'geographyId',
            'geographyName',
        ],
    ]) ?>

</div>
