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
            Member
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'member/default/create-member/'?>">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                Create member
            </a>
        </div>
        <?php
            $form = ActiveForm::begin([
                'id' => 'create-job-form',
                'method' => 'post',
                'options' => [
                    'enctype' => 'multipart/form-data',
                ],
                'action' => Yii::$app->homeUrl . 'member/default/search-member'
            ]); 
        ?>
        <div class="row pd-search">
            <div class="col-lg-3 font-search">
                Name<br>
                <input type="text" name="fullname" class="font-input form-control">
            </div>
        </div>
        <div class="row mt-3 pd-search">
            <div class="col-lg-2">
                <div class="font-search">
                    Branch
                </div>
                <select class="form-select" name="branchId" id="branchId" onchange="javascript:findInfo()" required>
                <?php 
                    if(isset($branchId) && $branchId!='') { 
                ?>
                <option value="<?=$branchId?>"><?=Branch::branchName($branchId)?></option>
                <?php
                    }
                ?>   
                <option value="">Select branch</option>
                <?php
                    if (isset($branchs) && count($branchs) > 0) {
                        foreach ($branchs as $a) :
                ?>
                <option value="<?= $a["branchId"] ?>"><?= $a["branchName"] ?></option>
                <?php
                    endforeach;
                    }
                ?>
                </select>
            </div>
            <div class="col-lg-2">
                <div class="font-search">
                    Section
                </div>
                <select class="form-select" id="sectionId" name="sectionId">
                <?php if(isset($sectionId) && $sectionId!='') 
                    {
                    
                ?>
                <option value="<?=$sectionId?>"><?=Section::sectionName($sectionId)?></option>
                <?php
                    }
                ?>   
                <option value="">Select section</option>
                <?php
                    if (isset($section) && count($section) > 0) {
                    foreach ($section as $a) :
                ?>
                <option value="<?= $a["sectionId"] ?>"><?= $a["sectionName"] ?></option>
                <?php
                    endforeach;
                    }
                ?>
                </select>
            </div>
            <div class="col-lg-2">
                <div class="font-search">
                    Position
                </div>
                <select class="form-select" id="positionId" name="positionId">
                <?php if(isset($positionId) && $positionId!='') 
                    {
                    
                ?>
                <option value="<?=$positionId?>"><?=Position::positionName($positionId)?></option>
                <?php
                    }
                ?>   
                <option value="">Select position</option>
                <?php
                    if (isset($position) && count($position) > 0) {
                    foreach ($position as $a) :
                ?>
                <option value="<?= $a["positionId"] ?>"><?= $a["positionName"] ?></option>
                <?php
                    endforeach;
                    }
                ?>
                </select>
            </div>
            <div class="col-lg-2">
                <div class="font-search">
                    Team
                </div>
                <select class="form-select" id="teamId" name="teamId">
                <?php if(isset($teamId) && $teamId!='') 
                    {
                    
                ?>
                <option value="<?=$teamId?>"><?=Team::teamName($teamId)?></option>
                <?php
                    }
                ?>   
                <option value="">Select position</option>
                <?php
                    if (isset($team) && count($team) > 0) {
                    foreach ($team as $a) :
                ?>
                <option value="<?= $a["teamId"] ?>"><?= $a["teamName"] ?></option>
                <?php
                    endforeach;
                    }
                ?>
                </select>
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-secondary bt-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <table class="table table-bordered table-hover text-center mt-3">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Branch</th>
                <th>Section</th>
                <th>Position</th>
                <th>Team</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($member) && count($member) > 0){
                    $i=1;
                    foreach ($member as $x) :
            ?>
            <tr id="memberId-<?= $x['memberId']?>">
                <td><?= $i ?></td>
                <td><?= $x["memberFirstName"] ?> <?= $x["memberLastName"] ?></td>
                <td><?= $x["username"] ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= Section::sectionName($x['sectionId']) ?></td>
                <td><?= Position::positionName($x['positionId']) ?></td>
                <td><?= Team::teamName($x['teamId']) ?></td>
                <td width="15%">
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'member/default/view-member/' . ModelMaster::encodeParams(["memberId" => $x['memberId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'member/default/update-member/' . ModelMaster::encodeParams(["memberId" => $x['memberId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteMember(<?= $x['memberId'] ?>)">
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