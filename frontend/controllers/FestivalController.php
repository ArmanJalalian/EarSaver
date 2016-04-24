<?php

namespace frontend\controllers;

use common\models\Festival;
use common\models\Stage;

class FestivalController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $festivals = Festival::find()
            ->all();
        
        return $this->render('index', [
            'festivals' => $festivals
        ]);
    }

    public function actionView($id)
    {
        //$model = new Festival();
        $stages = Stage::find()
            ->where(['=', 'Festival_Id', $id])
            ->all();
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'stages' => $stages
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Festival::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
