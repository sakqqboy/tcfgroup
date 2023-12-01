<?php
$this->title = 'Member';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\MemberHasType;
use yii\bootstrap5\ActiveForm;

?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Member
        </div>
    </div>
    <div class="row mt-4">
        <?php
        $form = ActiveForm::begin([
            'id' => 'create-job-form',
            'method' => 'post',
            'options' => [
                'enctype' => 'multipart/form-data',
            ],
            'action' => Yii::$app->homeUrl . 'member/default/search-member-check'
        ]);
        ?>
        <div class="col-lg-12">
            <div class="row mt-3 pd-search">
                <div class="col-lg-4">
                    <div class="font-search">
                        Name
                    </div>
                    <input type="text" name="fl" class="form-control" value="<?= isset($fl) ? $fl : '' ?>">
                </div>
                <div class="col-lg-4">
                    <div class="font-search">
                        Branch
                    </div>
                    <select class="form-select" name="branchId" id="branchId" onchange="javascript:findInfo()" required>
                        <option value="">Select branch</option>
                        <?php
                        if (isset($branchId) && $branchId != '') {
                        ?>
                            <option value="<?= $branchId ?>"><?= Branch::branchName($branchId) ?></option>
                        <?php
                        }
                        ?>
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
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <table class="table table-bordered table-hover text-center mt-3">
        <thead class="table-secondary">
            <tr>
                <th rowspan="2" style="vertical-align: middle;">No</th>
                <th rowspan="2" style="vertical-align: middle;">Name</th>
                <th rowspan="2" style="vertical-align: middle;">Branch</th>
                <th colspan="<?= count($membertype) ?>">Position</th>
            </tr>
            <tr>
                <?php
                if (isset($membertype) && count($membertype) > 0) {
                    $i = 1;
                    foreach ($membertype as $mt) :
                ?>
                        <th><?= $mt["memberTypeName"] ?></th>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($member) && count($member) > 0) {
                $i = 1;
                foreach ($member as $x) :
            ?>
                    <tr id="memberId-<?= $x['memberId'] ?>">
                        <td><?= $i ?></td>
                        <td><?= $x["memberFirstName"] ?> <?= $x["memberLastName"] ?></td>
                        <td><?= Branch::branchName($x['branchId']) ?></td>
                        <?php
                        if (isset($membertype) && count($membertype) > 0) {
                            $i = 1;
                            foreach ($membertype as $mtype) :
                                $has = MemberHasType::checkType($x['memberId'], $mtype['memberTypeId']);
                        ?>
                                <td class="col-1">
                                    <input class="input-checkbox form-check-input" type="checkbox" id="checkbox-<?= $mtype['memberTypeId'] ?>-<?= $x['memberId'] ?>" onclick="javascript:saveMemberType(<?= $x['memberId'] ?>, <?= $mtype['memberTypeId'] ?>)" <?= $has == 1 ? 'checked' : '' ?>>
                                </td>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>
                    </tr>
                <?php
                    $i++;
                endforeach;
            } else {
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