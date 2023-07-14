<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\Dbydehvuo6viq0Master;

/**
* This is the model class for table "dbydehvuo6viq0".
*
* @property integer $contactId
* @property string $hearUs
* @property string $countryName
* @property string $fullName
* @property string $birthdate
* @property string $address
* @property string $cityName
* @property string $postalCode
* @property string $email
* @property string $phoneNumber
* @property string $image
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Dbydehvuo6viq0 extends \backend\models\tokyoconsulting\master\Dbydehvuo6viq0Master{
    /**
    * @inheritdoc
    */
    public function rules()
    {
        return array_merge(parent::rules(), []);
    }

    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), []);
    }
}
