<?php

use yii\bootstrap5\ActiveForm;
use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Position;
use common\models\ModelMaster;

    $this -> title = 'Position';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Position
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/position/create-position'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create position
            </a>
        </div>
        <?php
            $form = ActiveForm::begin([
                'id' => 'create-job-form',
                'method' => 'post',
                'options' => [
                    'enctype' => 'multipart/form-data',
                ],
                'action' => Yii::$app->homeUrl . 'masterdata/position/search-position'
            ]); 
        ?>
        <div class="row mt-3 pd-search">
            <div class="col-lg-4">
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
                <option value="">Please select your branch</option>
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
            <div class="col-lg-4">
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
                <option value="">Please select your position</option>
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
                <th>Position</th>
                <th>Branch</th>
                <th>Detail</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($position) && count($position)){
                    $i=1;
                    foreach ($position as $x) :
            ?>
            <tr id="position-<?= $x['positionId']?>">
                <td><?= $i ?></td>
                <td><?= $x["positionName"] ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= $x["positionDetail"] ?></td>
                <td><?= $x["level"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/position/view-position/' . ModelMaster::encodeParams(["positionId" => $x['positionId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/position/update-position/' . ModelMaster::encodeParams(["positionId" => $x['positionId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deletePosition(<?= $x['positionId'] ?>)">
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