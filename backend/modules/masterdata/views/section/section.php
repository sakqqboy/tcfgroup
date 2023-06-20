<?php

use backend\models\tokyoconsulting\Section;
use yii\bootstrap5\ActiveForm;
use backend\models\tokyoconsulting\Branch;
use common\models\ModelMaster;

$this->title = 'Section';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Section
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?= Yii::$app->homeUrl . '/masterdata/section/create-section' ?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create section
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
        'action' => Yii::$app->homeUrl . 'masterdata/section/search-section'
    ]);
    ?>
    <div class="row pd-search">
        <div class="col-lg-4">
            <div class="font-search">
                Branch
            </div>
            <select class="form-select" name="branchId" id="branchId" onchange="javascript:findInfo()" required>
                <?php
                if (isset($branchId) && $branchId != '') {
                ?>
                    <option value="<?= $branchId ?>"><?= Branch::branchName($branchId) ?></option>
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
                Section
            </div>
            <select class="form-select" name="sectionId" id="sectionId">
                <?php
                if (isset($sectionId) && $sectionId != '') {
                ?>
                    <option value="<?= $sectionId ?>"><?= Section::sectionName($sectionId) ?></option>
                <?php
                }
                ?>
                <option value="">Please select your section</option>
                <?php
                if (isset($dropdown) && count($dropdown) > 0) {
                    foreach ($dropdown as $a) :
                ?>
                        <option value="<?= $a["sectionId"] ?>"><?= $a["sectionName"] ?></option>
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
                <th>Section</th>
                <th>Branch</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php


            if (isset($section) && count($section)) {
                $i = 1;
                foreach ($section as $x) :
            ?>
                    <tr id="section-<?= $x['sectionId'] ?>">
                        <td><?= $i ?></td>
                        <td><?= $x["sectionName"] ?></td>
                        <td><?= Branch::branchName($x['branchId']) ?></td>
                        <td><?= $x["sectionDetail"] ?></td>
                        <td width="20%">
                            <a class="btn btn-primary bt-size" href="<?= Yii::$app->homeUrl . 'masterdata/section/view-section/' . ModelMaster::encodeParams(["sectionId" => $x['sectionId']]) ?>">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-warning bt-size" href="<?= Yii::$app->homeUrl . 'masterdata/section/update-section/' . ModelMaster::encodeParams(["sectionId" => $x['sectionId']]) ?>">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-danger bt-size" href="javascript:deleteSection(<?= $x['sectionId'] ?>)">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    $i++;
                endforeach;
            } else {
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