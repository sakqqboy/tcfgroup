<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\ContactUsMaster;

/**
* This is the model class for table "contact_us".
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
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class ContactUs extends \common\models\tokyoconsulting\master\ContactUsMaster{
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
