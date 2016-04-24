<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "festival".
 *
 * @property string $Id
 * @property string $Name
 * @property string $Start
 * @property string $End
 *
 * @property Stage[] $stages
 */
class Festival extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'festival';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Start', 'End'], 'required'],
            [['Start', 'End'], 'safe'],
            [['Name'], 'string', 'max' => 100],
            [['imageFile'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'Start' => 'Start',
            'End' => 'End',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStages()
    {
        return $this->hasMany(Stage::className(), ['Festival_Id' => 'Id']);
    }
}
