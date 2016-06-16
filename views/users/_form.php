<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

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

			<?= $form->field($model, 'status',['options'=>['class'=>'row form-group']])->checkbox([], false)->label('status') ?>

			<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'loginFailed')->textInput() ?>

			<?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'image',['options'=>['class'=>'row form-group']])->fileInput() ?>

			<?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
