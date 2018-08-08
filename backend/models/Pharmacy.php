<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pharmacy".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $lon
 * @property string $lat
 * @property string $created
 */
class Pharmacy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pharmacy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'lon', 'lat'], 'required'],
            [['address'], 'string'],
            [['created'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['lon', 'lat'], 'string', 'max' => 20],
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
            'address' => 'Address',
            'lon' => 'Lon',
            'lat' => 'Lat',
            'created' => 'Created',
        ];
    }
}
