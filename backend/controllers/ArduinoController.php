<?php

namespace backend\controllers;

use Yii;
use common\models\Arduino;

class ArduinoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSound()
    {
        $model = new Arduino();

        $request = Yii::$app->request;
        $sound = $request->get('soundLevel');
        $festivalStage = $request->get('stage');

        Arduino::deleteAll('Stage_Id = :stage', [':stage' => $festivalStage]);

        $decibel = (20 * log($sound));

        $dec = (int)$decibel;

        if(isset($sound) && isset($festivalStage))
        {
            $model->SoundLevel = $dec;
            $model->Stage_Id = $festivalStage;

            $model->save();
        }
    }
}
