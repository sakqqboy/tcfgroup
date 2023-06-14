<?php
$this->title = 'Member Profile';
?>
<div class=row>
    <div class="col-lg-12 mymember text-center pt-4">
        <h1>MY MEMBER</h1>
    </div>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">


    <div class="row">
        <div class="card offset-lg-3 offset-md-3 col-lg-6 col-md-6 mt-3">
            <div class="card-body col-lg-12 col-md-6">
                <div class="image text-center">
                    <img src="<?= Yii::$app->homeUrl . $members->picture ?>" width="30%" height="30%">
                </div>
                <div class="row">
                    <div class="col-lg-6 memberinfor text-start mt-1">
                        <p>ID : <?= isset($members->memberId) ? $members->memberId : '' ?></p>
                        <p>FIRSTNAME : <?= isset($members->memberFirstName) ? $members->memberFirstName : '' ?></p>
                        <p>LASTNAME : <?= isset($members->memberLastName) ? $members->memberLastName : '' ?></p>
                        <p>NICKNAME : <?= isset($members->memberNickName) ? $members->memberNickName : '' ?></p>
                        <p>BIRTHDATE : <?= isset($members->birthDate) ? $members->birthDate : '' ?></p>
                    </div>
                    <div class="col-lg-6 memberinfor mt-5">
                        <p>USERNAME : <?= isset($members->username) ? $members->username : '' ?></p>
                        <p>GENDER : <?= $members->gender == 1 ? 'Male' : 'Female' ?></option>
                        </p>
                        <p>EMAIL : <?= isset($members->email) ? $members->email : '' ?></p>
                        <p>ADDRESS : <?= isset($members->address) ? $members->address : '' ?></p>
                    </div>
                </div>
            </div>
        </div>