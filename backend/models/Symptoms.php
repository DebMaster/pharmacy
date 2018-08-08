<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "symptoms".
 *
 * @property integer $id
 * @property integer $disease_id
 * @property string $symptom
 * @property string $created
 */
class Symptoms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'symptoms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disease_id', 'symptom'], 'required'],
            [['disease_id'], 'integer'],
            [['created'], 'safe'],
            [['symptom'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disease_id' => 'Disease ID',
            'symptom' => 'Symptom',
            'created' => 'Created',
        ];
    }
}
