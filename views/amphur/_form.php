<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\Amphur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="amphur-form">

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

			<?= $form->field($model, 'amphurCode')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'amphurName')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'geographyId')->textInput() ?>

			<?= $form->field($model, 'provinceId')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
