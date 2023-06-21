<?php
    $this -> title = 'Member';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Position;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;
use common\models\ModelMaster;
use yii\bootstrap5\ActiveForm;

?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Member Type
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'member/default/create-member-type/'?>">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                Create membertype
            </a>
        </div>
    </div>
    <table class="table table-bordered table-hover text-center mt-3">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($membertype) && count($membertype) > 0){
                    $i=1;
                    foreach ($membertype as $x) :
            ?>
            <tr id="membertypeid-<?= $x['memberTypeId']?>">
                <td><?= $i ?></td>
                <td><?= $x["memberTypeName"] ?></td>
                <td width="15%">
                    <a class="btn btn-primary bt-size"
                        href="<?=Yii::$app->homeUrl.'member/default/view-member-type/' . ModelMaster::encodeParams(["memberTypeId" => $x['memberTypeId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size"
                        href="<?=Yii::$app->homeUrl.'member/default/update-member-type/' . ModelMaster::encodeParams(["memberTypeId" => $x['memberTypeId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteMemberType(<?= $x['memberTypeId'] ?>)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php
                        $i++;
                    endforeach;
                }else { 
            ?>
            <tr>
                <td colspan="12"> No data</td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
</div>