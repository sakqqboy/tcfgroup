<?php
    $this -> title = 'Content';
?>
<div class="col-lg-12">
    <div class="col-lg-12">
        <div class="col-lg-12 mt-4 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/content/default/create-content'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create content
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Content Name</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Subcontents</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                use backend\models\tokyoconsulting\ContentDetail;
                use common\models\ModelMaster;

                if(isset($content)){
                    $i=1;
                    foreach ($content as $x) :
            ?>
            <tr id="content-<?= $x['contentId']?>">
                <td><?= $i ?></td>
                <td><?= $x["contentName"] ?></td>
                <td><?= $x["title"] ?></td>
                <td><?= $x["detail"] ?></td>
                <td><?= ContentDetail::countContentDetail( $x['contentId']) ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'content/default/view-content/' . ModelMaster::encodeParams(["contentId" => $x['contentId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $x['contentId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteContent(<?= $x['contentId'] ?>)">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-secondary bt-size" href="<?=Yii::$app->homeUrl.'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $x['contentId']])?>">
                        <i class="fa fa-info-circle " aria-hidden="true"></i>
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