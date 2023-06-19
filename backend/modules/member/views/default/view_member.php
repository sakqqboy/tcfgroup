<?php

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Position;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;

    $this -> title = 'View Member';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Profile
        </div>
        <img class="img-size mt-3" src="<?= Yii::$app->homeUrl . $member['picture'] ?>">
        <div class="mt-4">
           <span class="font-sub"> ID : </span>
           <span class="font-body"><?= isset($member -> memberId) ? $member -> memberId : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Username : </span>
            <span class="font-body"><?= isset($member -> username) ? $member -> username : '' ?></span>
        </div>
        <div>
           <span class="font-sub"> Prefix : </span>
           <span class="font-body"><?= $member -> prefix == 1 ? 'Mr.': 'Mrs.' ?></span>
        </div>
        <div>
            <span class="font-sub"> Fistname : </span>
            <span class="font-body"><?= isset($member -> memberFirstName) ? $member -> memberFirstName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Lastname : </span>
            <span class="font-body"><?= isset($member -> memberLastName) ? $member -> memberLastName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Nickname : </span>
            <span class="font-body"><?= isset($member -> memberNickName) ? $member -> memberNickName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Birthdate : </span>
            <span class="font-body"><?= isset($member -> birthDate) ? $member -> birthDate : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Gender : </span>
            <span class="font-body"><?= $member -> gender == 1 ? 'Male': 'Female' ?></span>
        </div>
        <div>
            <span class="font-sub"> Address : </span>
            <span class="font-body"><?= isset($member -> address) ? $member -> address : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Email : </span>
            <span class="font-body"><?= isset($member -> email) ? $member -> email : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Phone : </span>
            <span class="font-body"><?= isset($member -> telephoneNumber) ? $member -> telephoneNumber : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Branch : </span>
            <span class="font-body"><?= Branch::branchName($member -> branchId) ?></span>
        </div>
        <div>
            <span class="font-sub"> Section : </span>
            <span class="font-body"><?= Section::sectionName($member -> sectionId) ?></span>
        </div>
        <div>
            <span class="font-sub"> Position : </span>
            <span class="font-body"><?= Position::positionName($member -> positionId) ?></span>
        </div>
        <div>
            <span class="font-sub"> Team : </span>
            <span class="font-body"><?= Team::teamName($member -> teamId) ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>