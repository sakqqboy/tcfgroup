<?php
    $this -> title = 'Content Detail';

use backend\models\tokyoconsulting\Branch;
use common\models\ModelMaster;
?>
<div class="col-lg-12">
<div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Content Branch <?= Branch::branchName($contentbranch -> branchId) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-begin mt-4">
            <a class="btn btn-secondary buttons-size" href="<?=Yii::$app->homeUrl.'content/default/content-branch'?>">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Back
            </a>
        </div>
        <div class="col-6 text-end mt-4">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'content/default/create-content-branch-detail/'. ModelMaster::encodeParams(['contentBranchId' => $contentBranchId])?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create contentdetail
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                                              

                if(isset($contentBranchDetail)){
                    $i=1;
                    foreach ($contentBranchDetail as $x) :
            ?>
            <tr id="contentbranchdetail-<?= $x['contentBranchDetailId']?>">
                <td><?= $i ?></td>
                <td><?= $x["title"] ?></td>
                <td>
                    <?php
                        if($x["image"] != null) {
                    ?>
                        <img src="<?= Yii::$app -> homeUrl . $x["image"] ?>" width="70" height="70">
                    <?php
                        }
                    ?>
                </td>
                <td><?= $x["url"] ?></td>
                <td width="15%">
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'content/default/view-content-branch-detail/' . ModelMaster::encodeParams(["contentBranchDetailId" => $x['contentBranchDetailId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'content/default/update-content-branch-detail/' . ModelMaster::encodeParams(["contentBranchDetailId" => $x['contentBranchDetailId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteContentBranchDetail(<?= $x['contentBranchDetailId'] ?>)">
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