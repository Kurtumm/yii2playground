<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\District */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],
        'fieldConfig' => [
            'template' => '{label}<div class="col-sm-10">{input}</div>',
            'labelOptions'=> [
                'class'=>'col-sm-2 control-label'
            ]
        ]
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">Form</div>
        <div class="panel-body">

			<?= $form->field($model, 'districtCode')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'districtName')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'amphurId')->textInput() ?>

			<?= $form->field($model, 'provinceId')->textInput() ?>

			<?= $form->field($model, 'geographyId')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
