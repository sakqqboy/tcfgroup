<?php
    use common\helpers\Path;
    use common\models\ModelMaster;

?>

<?php
    if($canEdit == 1 && $userInThisBranch == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part1" onchange="javascript:showContent('webinar-part1')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-webinar-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<div class="col-12 pr12 seccondary-background">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12">
                <?php
                if (isset($webinarvideo) && count($webinarvideo) > 0) {
                    $i = 0;
                    foreach ($webinarvideo as $binar) :
                ?>
                <img src="<?= Path::backendUrl() . $binar['image'] ?>" class="img-webinar">
                <span class="badge bg-primary image8"> <a href="#" class="no-underline1"><i
                            class="fa fa-play-circle-o play-y" aria-hidden="true"></i> </a> When People changes Their
                    Perspective</span>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($webinarvideo) && count($webinarvideo) > 0) {
                $i = 0;
                foreach ($webinarvideo as $wv) :
            ?>
            <div class="col-10 page-webinar">
                <?= $wv['detail'] ?>
            </div>
            <div class="col-10 page-webinar-home1">
                <?= $wv['detail2'] ?>
            </div>
            <?php
                endforeach;
            }
            ?>
            <div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($binar["contentBranchId"])) {
                ?>
                <div class="col-12 text-end mt-10">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $binar['contentBranchId']]) ?>"
                        target="_blank">Edit (<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="row mt-50">
                <?php
                if (isset($detailvideo) & count($detailvideo) > 0) {
                    $i = 0;
                    foreach ($detailvideo as $dv) :
                ?>
                <div class="col-4 detail-calendar">
                    <div class="col-12">
                        <!-- <i class="fa fa-calendar form-calendar1" aria-hidden="true"></i> -->
                        <?= $dv["detail2"] ?>
                        <p class="text-1"> <?= $dv['title'] ?></p>
                        <p class="text-2"><?= $dv['detail'] ?></p>
                    </div>
                </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($dv["contentBranchId"])) {
                ?>
                <div class="col-12 text-end mb-3">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $dv['contentBranchId']]) ?>"
                        target="_blank">Edit (<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>