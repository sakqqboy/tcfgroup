<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 page-tree">
    <input type="hidden" id="total-countryindex2" value="<?= count($countryindex2) ?>">
    <div class="row mt-20">
        <div class="col-md-4 col-12">
            <?php
            if (isset($services) && count($services) > 0) {
                $i = 0;
                foreach ($services as $ser) :
            ?>
            <div class="col-12 form-services mt-50">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $ser['title'] ?>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="row mt-40 form-services-page">
                <div class="col-4">
                    Select Country
                </div>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example">
                        <option></option>
                        <?php
                        if (isset($dropdown) && count($dropdown) > 0) {
                            foreach ($dropdown as $dd) :
                        ?>
                        <option value="<?= $dd["countryId"] ?>"><?= $dd["countryName"] ?></option>
                        <?php
                            endforeach;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-12 pic-asset">
                <?php
                $countryindex['image'] = '';
                if (isset($countryindex2) && count($countryindex2)) {
                    foreach ($countryindex2 as $countryindex) :
                ?>
                <img src="<?= Path::backendUrl() . $countryindex['image'] ?>" class="asset-10">
                <?php
                    endforeach;
                }
                ?>
            </div>
        </div>

        <div class="col-md-8 col-12">
            <?php
            if (isset($stage) && count($stage) > 0) {
                $i = 0;
                foreach ($stage as $select) :
            ?>
            <div class="col-12 form-select-tree1">
                <?= $select['title'] ?>
            </div>
            <div class="col-12 form-services">
                <?= $select['detail'] ?>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <?php
            if ($admin == 1) { ?>
            <div class=" col-12 text-end edit-content mt-4">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $select['contentId']]) ?>"
                    target="_blank">Edit</a>
            </div>
            <?php
            }
            ?>
            <div class="col-12 mt-20">
                <div class="row">

                    <?php
                    if (isset($taxation) && count($taxation) > 0) {
                        $i = 0;
                        foreach ($taxation as $table) :
                            if ($i < 6) {

                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-4 col-8">
                        <div class="card col-10 mt-20 form-page-text">
                            <div class="text-center">
                                <img src="<?= Path::backendUrl() . $table['image'] ?>" class="card-img-top">
                                <div class="card-body text-center">
                                    <h6> <?= $table['title'] ?></h6>
                                    <p><?= $table['detail'] ?></p>
                                    <button type="button"
                                        class="btn btn-outline-primary"><?= $table['detail2'] ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content mt-2">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $table['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>