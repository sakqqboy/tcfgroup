<?php
$this->title = 'Member';

use common\models\ModelMaster;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

]); ?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

<div class="col-lg-12 member mt-2 text-center pt-3">
    <h3>MEMBER</h3>
</div>



<div class="col-lg-12 pb-3 text-end">
    <a href="<?= Yii::$app->homeUrl . 'member/default/create-member' ?>" class="btn btn-success">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Create Member
    </a>
</div>


<div class="col-lg-12 text-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>BranchID</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($members) && count($members) > 0) {
                $i = 1;
                foreach ($members as $a) :
            ?>
                    <tr id="members-<?= $a['memberId'] ?>">
                        <td><?= $a["memberId"] ?></td>
                        <td><?= $a["memberFirstName"] ?></td>
                        <td><?= $a["memberLastName"] ?></td>
                        <td><?= $a["username"] ?></td>
                        <td><?= $a["branchId"] ?></td>
                        <td> <?php
                                if ($a["picture"] != null) {
                                ?>
                                <img src="<?= Yii::$app->homeUrl . $a['picture'] ?>" width="60" height="60">
                            <?php
                                }
                            ?>
                        </td>
                        <td width="14%">

                            <a href="<?= Yii::$app->homeUrl . 'member/default/view-member/' . ModelMaster::encodeParams(["memberId" => $a['memberId'], "memberNo" => $a['memberNo']]) ?>" class="btn btn-primary"> <i class="fa fa-solid fa-eye"></i> </a>

                            <a href="<?= Yii::$app->homeUrl . 'member/default/update-member/' . ModelMaster::encodeParams(["memberId" => $a['memberId'], "memberNo" => $a['memberNo']])  ?>" class="btn btn-warning"> <i class="fa fa-pencil" aria-hidden="true"> </i></a>

                            <a href="javascript:deleteMember(<?= $a['memberId'] ?>)" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>

                    </tr>
                <?php
                    $i++;
                endforeach;
            } else { ?>
                <tr>
                    <td colspan="12"> ไม่มีข้อมูล</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php ActiveForm::end(); ?>