<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\ClientMaster;

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

class Client extends \common\models\tokyoconsulting\master\ClientMaster{
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
