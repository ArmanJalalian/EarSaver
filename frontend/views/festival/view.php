<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('/backend/web/uploads/festivals/'.$model->Name.".png", ['style' => ['width' => '200px', 'height' => '200px'], 'class' => 'center-block'])?>
        <h1 class="lead"><?= $model->Name; ?></h1>
    </div>

    <div class="body-content">
        <div class="row">
            <?php foreach ($stages as $stage): ?>
                <div class="col-lg-4">
                    <?= Html::img('/backend/web/uploads/stages/'.$stage->Name.".svg", ['style' => ['width' => '200px', 'height' => '200px'], 'class' => 'center-block'])?>
                    <h2 class="text-center"><?php echo $stage['Name']; ?></h2>
                    <?= Html::a('View Stage', ['stage/view/'.$stage->Id], ['class' => 'btn btn-lg btn-success center-block']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>