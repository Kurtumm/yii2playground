<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\Geography */

$this->title = 'Update Geography: ' . $model->geographyId;
$this->params['breadcrumbs'][] = ['label' => 'Geographies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->geographyId, 'url' => ['view', 'id' => $model->geographyId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="geography-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
