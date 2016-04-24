<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Festival */

$this->title = 'Update Festival: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Festivals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="festival-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
