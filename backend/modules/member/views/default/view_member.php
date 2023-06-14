<?php
    $this -> title = 'View Member';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Profile
        </div>
        <div>
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
            <span class="font-sub"> Branchid : </span>
            <span class="font-body"><?= isset($member -> branchId) ? $member -> branchId : '' ?></span>
        </div><br>
    </div>
</div>