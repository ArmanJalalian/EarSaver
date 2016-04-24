<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Pjax;

$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 3000);
});
JS;
$this->registerJs($script);

?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('/backend/web/uploads/stages/'.$model->Name.".svg", ['style' => ['width' => '200px', 'height' => '200px'], 'class' => 'center-block'])?>
    </div>
    <?php Pjax::begin(); ?>
    <div class="body-content">
        <div class="row">
            <?php foreach ($decibels as $decibel): ?>
                <h2 class="text-center"><?= $decibel['SoundLevel']; ?> dB</h2>
            <?php endforeach; ?>
            <?= Html::a("Refresh", ['stage/view/'.$model->Id], ['class' => 'btn btn-lg btn-primary', 'style' => ['display' => 'none'], 'id' => 'refreshButton']) ?>
        </div>
    </div>
    <?php Pjax::end(); ?>
</div>
