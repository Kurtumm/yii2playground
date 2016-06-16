<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\UserProfiles */

$this->title = 'Update User Profiles: ' . $model->userProfilesId;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userProfilesId, 'url' => ['view', 'id' => $model->userProfilesId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-profiles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
