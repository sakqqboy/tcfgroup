<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\MemberMaster;

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

class Member extends \backend\models\tokyoconsulting\master\MemberMaster{
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
