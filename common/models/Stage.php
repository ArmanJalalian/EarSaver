<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stage".
 *
 * @property string $Id
 * @property string $Name
 * @property string $Festival_Id
 *
 * @property Arduino[] $arduinos
 * @property Festival $festival
 */
class Stage extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Festival_Id'], 'required'],
            [['Festival_Id'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['imageFile'], 'file'],
            [['Festival_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Festival::className(), 'targetAttribute' => ['Festival_Id' => 'Id']],
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
            'Festival_Id' => 'Festival  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArduinos()
    {
        return $this->hasMany(Arduino::className(), ['Stage_Id' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFestival()
    {
        return $this->hasOne(Festival::className(), ['Id' => 'Festival_Id']);
    }
}
