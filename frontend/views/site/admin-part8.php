<?php
if (isset($footer) && count($footer) > 0) {
    $i = 0;
    foreach ($footer as $h) :
?>
<div class="col-12 pr12 blue pt-20 pb-10">
    <div class="row">
        <div class="col-1g-10 col-md-10 col-12 text-update">
            <p><?= $h['title'] ?></p>
            <p> <?= $h['detail'] ?></p>
        </div>
        <div class="col-1g-10 col-md-10 col-12 text-project">
            <p><?= $h['detail2'] ?></p>
        </div>
        <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
            <br>
        </div>
    </div>
</div>
<div class="col-12 pr12">
    <div class="row">
        <div class="offset-lg-6 col-lg-6 col-12 text-center">
            <img src="<?= Yii::$app->homeUrl . $h['image'] ?>" class="image-book">
        </div>
    </div>
</div>
<?php
        $i++;
    endforeach;
}
?>