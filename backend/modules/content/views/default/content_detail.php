<?php
    $this -> title = 'Content Detail';
    use common\models\ModelMaster;
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-6 text-begin mt-4">
            <a class="btn btn-secondary buttons-size" href="<?=Yii::$app->homeUrl.'content/default/content'?>">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Back
            </a>
        </div>
        <div class="col-6 text-end mt-4">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'content/default/create-content-detail/'. ModelMaster::encodeParams(['contentId' => $contentId])?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create content
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Image</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                                              

                if(isset($contentDetail)){
                    $i=1;
                    foreach ($contentDetail as $x) :
            ?>
            <tr id="content-detail-<?= $x['contentDetailId']?>">
                <td><?= $i ?></td>
                <td><?= $x["title"] ?></td>
                <td>
                    <?php
                        if($x["image"] != null) {
                    ?>
                        <img src="<?= Yii::$app -> homeUrl . $x["image"] ?>" width="70" height="70">
                    <?php
                        }
                    ?>
                </td>
                <td><?= $x["url"] ?></td>
                <td width="15%">
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'content/default/view-content-detail/' . ModelMaster::encodeParams(["contentDetailId" => $x['contentDetailId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'content/default/update-content-detail/' . ModelMaster::encodeParams(["contentDetailId" => $x['contentDetailId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteContentDetail(<?= $x['contentDetailId'] ?>)">
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