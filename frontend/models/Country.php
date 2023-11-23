<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $countryId
 * @property string $countryName
 * @property int $continentId
 * @property string|null $flag
 * @property string|null $lat
 * @property string|null $lng
 * @property int|null $hasBranch
 * @property int $status
 * @property string|null $createDateTime
 * @property string|null $updateDateTime
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countryName', 'continentId'], 'required'],
            [['continentId', 'hasBranch', 'status'], 'integer'],
            [['createDateTime', 'updateDateTime'], 'safe'],
            [['countryName', 'flag'], 'string', 'max' => 255],
            [['lat', 'lng'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'countryId' => 'Country ID',
            'countryName' => 'Country Name',
            'continentId' => 'Continent ID',
            'flag' => 'Flag',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'hasBranch' => 'Has Branch',
            'status' => 'Status',
            'createDateTime' => 'Create Date Time',
            'updateDateTime' => 'Update Date Time',
        ];
    }
}
