<?php

use backend\models\tokyoconsulting\Branch;
use yii\bootstrap5\ActiveForm;

    $this -> title = 'Branch';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Branch
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/branch/create-branch'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create branch
            </a>
        </div>
    </div><br>
    <?php
        $form = ActiveForm::begin([
            'id' => 'create-job-form',
            'method' => 'post',
            'options' => [
            'enctype' => 'multipart/form-data',
            ],
            'action' => Yii::$app->homeUrl . 'masterdata/branch/search-branch'
        ]); 
    ?>
    <div class="row pd-search">
        <div class="col-lg-4">
            <div class="font-search">
                Branch
            </div>
            <select class="form-select" name="branchId" id="branchId">
            <?php 
                if(isset($branchId) && $branchId!='') { 
            ?>
            <option value="<?=$branchId?>"><?=Branch::branchName($branchId)?></option>
            <?php
                }
            ?>   
            <option value="">Please select your branch</option>
            <?php
                if (isset($dropdown) && count($dropdown) > 0) {
                    foreach ($dropdown as $a) :
            ?>
            <option value="<?= $a["branchId"] ?>"><?= $a["branchName"] ?></option>
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
    <table class="table table-bordered table-hover text-center mt-3">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Branch</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                use backend\models\tokyoconsulting\ContentDetail;
                use common\models\ModelMaster;

                if(isset($branch)){
                    $i=1;
                    foreach ($branch as $x) :
            ?>
            <tr id="branch-<?= $x['branchId']?>">
                <td><?= $i ?></td>
                <td><?= $x["branchName"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/branch/view-branch/' . ModelMaster::encodeParams(["branchId" => $x['branchId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/branch/update-branch/' . ModelMaster::encodeParams(["branchId" => $x['branchId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteBranch(<?= $x['branchId'] ?>)">
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
                    <td colspan="5"> No data</td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>