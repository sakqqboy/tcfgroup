<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\BranchMaster;
use yii\base\Exception;

/**
* This is the model class for table "branch".
*
* @property integer $branchId
* @property string $branchName
* @property integer $countryId
* @property string $flag
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Branch extends \backend\models\tokyoconsulting\master\BranchMaster{
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

    public static function branchName($branchId){
        $branch = Branch::find() -> where(["branchId" => $branchId]) -> asArray() -> one();
        if(isset($branch) && !empty($branch)){
        //    throw new Exception(print_r($branch,true));
        return $branch["branchName"];
        }else{
           // $branch = Branch::find() -> where(["branchI" => $branchId]) -> asArray() -> one();
            return null;
      }
    }
}
