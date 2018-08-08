<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medication".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $otc
 * @property string $created
 */
class Medication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'otc'], 'required'],
            [['description', 'otc'], 'string'],
            [['created'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'otc' => 'Otc',
            'created' => 'Created',
        ];
    }
}
