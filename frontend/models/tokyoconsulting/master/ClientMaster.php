<?php

namespace frontend\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "client".
*
    * @property integer $clientId
    * @property string $countryId
    * @property integer $typePerson
    * @property string $company
    * @property string $name
    * @property string $position
    * @property string $email
    * @property string $phoneNumber
    * @property integer $businessType
    * @property string $question
    * @property string $detail
    * @property integer $status
    * @property string $createDateTime
    * @property string $updateDateTime
*/
class ClientMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'client';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['typePerson', 'company', 'name', 'position', 'email', 'phoneNumber', 'businessType'], 'required'],
            [['typePerson', 'businessType'], 'integer'],
            [['question', 'detail'], 'string'],
            [['createDateTime', 'updateDateTime'], 'safe'],
            [['countryId', 'company', 'name', 'position', 'email', 'phoneNumber'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'clientId' => 'Client ID',
    'countryId' => 'Country ID',
    'typePerson' => 'Type Person',
    'company' => 'Company',
    'name' => 'Name',
    'position' => 'Position',
    'email' => 'Email',
    'phoneNumber' => 'Phone Number',
    'businessType' => 'Business Type',
    'question' => 'Question',
    'detail' => 'Detail',
    'status' => 'Status',
    'createDateTime' => 'Create Date Time',
    'updateDateTime' => 'Update Date Time',
];
}
}
