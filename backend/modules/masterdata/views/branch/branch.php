<?php
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
    <table class="table table-bordered table-hover text-center">
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