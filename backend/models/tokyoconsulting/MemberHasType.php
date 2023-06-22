<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\MemberHasTypeMaster;

/**
* This is the model class for table "member_has_type".
*
* @property integer $memberHasTypeId
* @property integer $memberTypeId
* @property integer $memberId
* @property integer $status
* @property string $createDatetime
* @property string $updateDatetime
*/

class MemberHasType extends \backend\models\tokyoconsulting\master\MemberHasTypeMaster{
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
    public static function typeName($memberId){
        $typeName='';

        $memberType=MemberHasType::find()
        -> select('mt.memberTypeName')
        -> JOIN("LEFT JOIN","member_type mt","member_has_type.memberTypeId=mt.memberTypeId")
        -> where(["member_has_type.memberId"=>$memberId])
        -> asArray()
        -> all();

        if(isset($memberType) && count($memberType)>0){
            foreach($memberType as $mt):
                $typeName.=$mt["memberTypeName"].'<br>';
            endforeach;
        } 
        return $typeName;
       /* $memberhastype = MemberHasType::find() 
        -> where(["memberId" => $memberId]) 
        -> asArray()
         -> all();
        if(isset($memberhastype) && count($memberhastype)>0){
            foreach($memberhastype as $mt):
                $memberType=MemberType::find()
                ->where(["memberTypeId"=>$mt["memberTypeId"]])
                ->asArray()
                ->one();
                if(isset($memberType) && !empty($memberType)){
                    $typeName.=$memberType["memberTypeName"].'<br>';
                   // $typeName=$typeName.$memberType["memberTypeName"].'<br>';
                }
            endforeach;
        }*/
        // $sql="SELECT `mt`.`memberTypeName` FROM `member_has_type` LEFT JOIN `member_type` `mt` ON member_has_type.memberTypeId=mt.memberTypeId WHERE `member_has_type`.`memberId`=$memberId";
        // $memberType=[];
        // $memberType=exec($sql);
       // throw new exc(print_r($memberType,true));
    }
}
