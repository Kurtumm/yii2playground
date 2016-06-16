<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\yii2playground\search\UserProfiles */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profiles-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Profiles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            index
            <p class="pull-right">
                <?= Html::a('Create User Profiles', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
            </p>
        </div>
        <div class="panel-body">
            <?php Pjax::begin(); ?>
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
				'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
					'userProfilesId',
					'userId',
					'address',
					'provinceId',
					'mobile',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
