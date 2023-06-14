<?php

namespace common\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "member".
*
    * @property integer $memberId
    * @property string $memberNo
    * @property string $prefix
    * @property string $memberFirstName
    * @property string $memberLastName
    * @property string $memberNickName
    * @property string $birthDate
    * @property string $picture
    * @property string $username
    * @property string $password_hash
    * @property integer $gender
    * @property string $telephoneNumber
    * @property string $email
    * @property string $address
    * @property integer $branchId
    * @property integer $status
    * @property string $createDateTime
    * @property string $updateDateTime
*/
class MemberMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'member';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['memberFirstName', 'memberLastName', 'username', 'email', 'branchId'], 'required'],
            [['birthDate', 'createDateTime', 'updateDateTime'], 'safe'],
            [['address'], 'string'],
            [['branchId'], 'integer'],
            [['memberNo', 'memberFirstName', 'memberLastName', 'email'], 'string', 'max' => 200],
            [['prefix'], 'string', 'max' => 45],
            [['memberNickName', 'telephoneNumber'], 'string', 'max' => 100],
            [['picture', 'password_hash'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 6],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'memberId' => 'Member ID',
    'memberNo' => 'Member No',
    'prefix' => 'Prefix',
    'memberFirstName' => 'Member First Name',
    'memberLastName' => 'Member Last Name',
    'memberNickName' => 'Member Nick Name',
    'birthDate' => 'Birth Date',
    'picture' => 'Picture',
    'username' => 'Username',
    'password_hash' => 'Password Hash',
    'gender' => 'Gender',
    'telephoneNumber' => 'Telephone Number',
    'email' => 'Email',
    'address' => 'Address',
    'branchId' => 'Branch ID',
    'status' => 'Status',
    'createDateTime' => 'Create Date Time',
    'updateDateTime' => 'Update Date Time',
];
}
}
