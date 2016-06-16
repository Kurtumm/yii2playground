<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\search\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['data-pjax' => true, 'class' => 'well'],
    ]); ?>

    <div class="input-group">
        <span class="input-group-btn">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        </span>
        <?= Html::activeTextInput($model, 'searchText', ['class'=>'form-control'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
