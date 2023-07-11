<?php

namespace common\models\tokyoconsulting\master;

use Yii;

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
class ContactUsMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'contact_us';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['hearUs', 'countryName', 'fullName', 'cityName', 'postalCode', 'email', 'phoneNumber'], 'required'],
            [['hearUs', 'address'], 'string'],
            [['birthdate', 'createDateTime', 'updateDateTime'], 'safe'],
            [['countryName', 'fullName', 'cityName', 'postalCode', 'email', 'phoneNumber'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'contactId' => 'Contact ID',
    'hearUs' => 'Hear Us',
    'countryName' => 'Country Name',
    'fullName' => 'Full Name',
    'birthdate' => 'Birthdate',
    'address' => 'Address',
    'cityName' => 'City Name',
    'postalCode' => 'Postal Code',
    'email' => 'Email',
    'phoneNumber' => 'Phone Number',
    'status' => 'Status',
    'createDateTime' => 'Create Date Time',
    'updateDateTime' => 'Update Date Time',
];
}
}
