<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\UserFiles */

$this->title = 'Update User Files: ' . $model->userFilesId;
$this->params['breadcrumbs'][] = ['label' => 'User Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userFilesId, 'url' => ['view', 'id' => $model->userFilesId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-files-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
