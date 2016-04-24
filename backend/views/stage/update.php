<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Stage */

$this->title = 'Update Stage: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Stages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
