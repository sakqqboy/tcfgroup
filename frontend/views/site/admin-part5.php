<?php
    use common\helpers\Path;
    use common\models\ModelMaster;
?>

<div class="col-12 ">
    <?php
    if (isset($society) && count($society) > 0) {
        $i = 0;
        foreach ($society as $st) :
    ?>
            <img src="<?= Path::backendUrl() . $st['image'] ?>" style="width: 100%;">
            <div class="text2">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $st['title'] ?>
            </div>
            <div class="text3">
                <p> <?= $st['detail'] ?> <span class="font-color-blue"><?= $st['detail3'] ?> </span> is</p>
                <p>&nbsp;&nbsp;&nbsp; <?= $st['detail2'] ?><span class="font-color-blue"> <?= $st['detail4'] ?></span> ❞ </p>
            </div>
            <div class="col-md-5 col-12 text-tokyo">
                <?= $st['detail5'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $e['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>