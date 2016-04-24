<?php

namespace frontend\controllers;

use common\models\Arduino;
use common\models\Stage;

class StageController extends \yii\web\Controller
{
    public function actionView($id)
    {
        $decibels = Arduino::find()
            ->where(['=', 'Stage_Id', $id])
            ->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'decibels' => $decibels
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Stage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
