<?php
    use common\helpers\Path;
    use common\models\ModelMaster;

?>

<div class="col-12 pr12 bk-ser">   
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="col-12 title-Es">
                    <?php
                    if (isset($standing) && !empty($standing)) {
                    ?>
                        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"><?= $standing['title'] ?>
                    <?php
                    }
                    ?>
                </div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($standing['contentBranchId'])) { ?>
                    <div class="col-12 text-end">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $standing['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
                <div class="col-12 mt-80">
                    <div class="row" style="height: 30px;">
                        <?php
                            if (isset($understanding) && count($understanding) > 0) { 
                        ?>
                        <?php
                            $i = 1;
                            foreach ($understanding as $std) :
                                if ($i < 4) {
                        ?>  
                                    <div class="col-4 Es1 text-center" id="limited-<?= $i ?>" onmouseover="javascript:showLimited2(<?= $i ?>)">
                                        <?= $std['title'] ?>
                                    </div>

                                    <div class="col-4 copy-Es1 text-center" style="display:none;" id="limited2-<?= $i ?>" onmouseleave="javascript:showLimited1(<?= $i ?>)" onclick="javascript:servicesPart3(<?= $i ?>)">
                                        <?= $std['title'] ?>
                                        <div class="offset-2 col-8 txt-es"></div>
                                    </div>

                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($std['contentBranchId'])) { ?>
                        <div class="col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $std['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-12 Es1"><br>
                    <?php
                        if (isset($newservices) && count($newservices) > 0) {
                        $i = 1;
                        foreach ($newservices as $s) :
                            if ($i < 4) {
                    ?>
                            <div class="row" style="display: <?= $i == 1 ? '' : 'none' ?>;" id="newservices-<?= $i ?>">
                                <div class="title-newservices">
                                    <p> <?= $s['title'] ?><p>
                                </div>
                                <div class="detail-newservices">
                                    <?php
                                        if( $s['detail'] != '') {
                                    ?>
                                        <li><?= $s['detail'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail2'] != '') {
                                    ?>
                                        <li><?= $s['detail2'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail3'] != '') {
                                    ?>
                                        <li><?= $s['detail3'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail4'] != '') {
                                    ?>
                                        <li><?= $s['detail4'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail5'] != '') {
                                    ?>
                                        <li><?= $s['detail5'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail6'] != '') {
                                    ?>
                                        <li><?= $s['detail6'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                    <?php
                                        if( $s['detail7'] != '') {
                                    ?>
                                        <li><?= $s['detail7'] ?></li>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>

                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($s['contentBranchId'])) { ?>
                        <div class="col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $s['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12 mt-50">
                <div class="row">
                    <div class="col-lg-1 col-md-12 col-12">
                        <img src="<?= Path::backendUrl() ?>image/img/long.png" class="width-long">
                    </div>

                    <div class="col-lg-11 col-md-12 col-12 Name-Clearance mt-5">
                        <?php
                        if (isset($nameslider) && count($nameslider) > 0) {
                            $i = 0;
                            foreach ($nameslider as $nmlider) :
                        ?>
                                <div class="col-12" style="margin-bottom: 32px;">
                                    <div class="col-12 services1"> <?= $nmlider['title'] ?></div>
                                    <div class="col-12 services2 mt-1 "> <?= $nmlider['detail'] ?></div>
                                </div>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1 && isset($nmlider['contentBranchId'])) { ?>
                            <div class="col-12 text-end">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $nmlider['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-12" style="margin-top:60px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>