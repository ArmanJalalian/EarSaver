<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<div class="site-index">

    <div class="jumbotron">
        <p class="lead">Alle andere festivals.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <?php foreach ($festivals as $festival): ?>
                <div class="col-lg-4">
                    <?= Html::img('/backend/web/uploads/festivals/'.$festival->Name.".png", ['style' => ['width' => '200px', 'height' => '200px'], 'class' => 'center-block'])?>
                    <h2 class="text-center"><?= $festival['Name']; ?></h2>
                    <?= Html::a('View festival', ['festival/view/'.$festival->Id], ['class' => 'btn btn-lg btn-success center-block']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
