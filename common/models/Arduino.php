<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "arduino".
 *
 * @property string $Id
 * @property double $SoundLevel
 * @property string $Stage_Id
 *
 * @property Stage $stage
 */
class Arduino extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arduino';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SoundLevel', 'Stage_Id'], 'required'],
            [['SoundLevel'], 'number'],
            [['Stage_Id'], 'integer'],
            [['Stage_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Stage::className(), 'targetAttribute' => ['Stage_Id' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'SoundLevel' => 'Sound Level',
            'Stage_Id' => 'Stage  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStage()
    {
        return $this->hasOne(Stage::className(), ['Id' => 'Stage_Id']);
    }
}
