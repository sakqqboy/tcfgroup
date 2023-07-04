<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\ContentBranchMaster;

/**
* This is the model class for table "content_branch".
*
* @property integer $contentBranchId
* @property string $contentName
* @property integer $branchId
* @property string $title
* @property string $detail
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class ContentBranch extends \backend\models\tokyoconsulting\master\ContentBranchMaster{
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

    public static function contentBranchName($contentBranchId){
        $contentbranchid = ContentBranch::find() -> where(["contentBranchId" => $contentBranchId]) -> asArray() -> one();
        if(isset($contentbranchid) && !empty($contentbranchid)){
        //    throw new Exception(print_r($branch,true));
        return $contentbranchid["contentName"];
        }else{
           // $branch = Branch::find() -> where(["branchI" => $branchId]) -> asArray() -> one();
            return null;
      }
    }
}
