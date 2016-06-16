<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\District */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'districtCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'districtName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amphurId')->textInput() ?>

    <?= $form->field($model, 'provinceId')->textInput() ?>

    <?= $form->field($model, 'geographyId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
