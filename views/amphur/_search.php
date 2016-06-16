<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\search\Amphur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="amphur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'amphurId') ?>

    <?= $form->field($model, 'amphurCode') ?>

    <?= $form->field($model, 'amphurName') ?>

    <?= $form->field($model, 'geographyId') ?>

    <?= $form->field($model, 'provinceId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
