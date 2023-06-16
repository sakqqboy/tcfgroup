<?php
    $this -> title = 'Member';
    use common\models\ModelMaster;
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-6 text-begin mt-4">
            <a class="btn btn-secondary buttons-size" href="<?=Yii::$app->homeUrl.'member/default/member'?>">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Back
            </a>
        </div>
        <div class="col-6 text-end mt-4">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'member/default/create-member/'?>">
                <i class="fa fa-user-plus                               " aria-hidden="true"></i>
                Create member
            </a>
        </div>
        <div class="col-6 text-end">
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Picture</th>
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
                <td><?= $x["memberFirstName"] ?></td>
                <td><?= $x["memberLastName"] ?></td>
                <td><?= $x["username"] ?></td>
                <td>
                    <?php
                        if($x["picture"] != null) {
                    ?>
                        <img src="<?= Yii::$app -> homeUrl . $x["picture"] ?>" width="70" height="70">
                    <?php
                        }
                    ?>
                </td>
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
                    <td colspan="5"> No data</td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>