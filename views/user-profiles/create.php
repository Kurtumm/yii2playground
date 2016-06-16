<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\yii2playground\UserProfiles */

$this->title = 'Create User Profiles';
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profiles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
