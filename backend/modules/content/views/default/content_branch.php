<?php
    $this -> title = 'Content Branch';

    use backend\models\tokyoconsulting\Branch;
    use backend\models\tokyoconsulting\ContentBranchDetail;
    use backend\models\tokyoconsulting\ContentDetail;
    use common\models\ModelMaster;
use yii\bootstrap5\ActiveForm;

?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Content Branch
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'content/default/create-content-branch'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create content
            </a>
        </div>
        <?php
            $form = ActiveForm::begin([
                'id' => 'create-job-form',
                'method' => 'post',
                'options' => [
                    'enctype' => 'multipart/form-data',
                ],
                'action' => Yii::$app->homeUrl . 'content/default/search-content-branch'
            ]); 
        ?>
        <div class="row mt-3 pd-search">
            <div class="col-lg-4">
                <div class="font-search">
                    Branch
                </div>
                <select class="form-select" name="branchId" id="branchId" required>
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
            <div class="col-lg-2">
                <button type="submit" class="btn btn-secondary bt-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Content</th>
                <th>Branch</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Subcontents</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($contentbranch)){
                    $i=1;
                    foreach ($contentbranch as $x) :
            ?>
            <tr id="contentbranch-<?= $x['contentBranchId']?>">
                <td><?= $i ?></td>
                <td><?= $x["contentName"] ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= $x["title"] ?></td>
                <td><?= $x["detail"] ?></td>
                <td><?= ContentBranchDetail::countContentBranchDetail( $x['contentBranchId']) ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'content/default/view-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $x['contentBranchId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $x['contentBranchId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteContentBranch(<?= $x['contentBranchId'] ?>)">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-secondary bt-size" href="<?=Yii::$app->homeUrl.'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $x['contentBranchId']])?>">
                        <i class="fa fa-info-circle " aria-hidden="true"></i>
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