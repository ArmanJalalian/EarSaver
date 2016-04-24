<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FestivalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Festivals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="festival-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Festival', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Name',
            'Start',
            'End',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
