<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Backend Earsaver</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <p><?= Html::a('Festivals', ['festival/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
            </div>
            <div class="col-lg-6">
                <p><?= Html::a('Stages', ['stage/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
            </div>
        </div>

    </div>
</div>
