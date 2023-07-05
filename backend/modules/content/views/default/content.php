<?php

use yii\bootstrap5\ActiveForm;
use backend\models\tokyoconsulting\ContentDetail;
use common\models\ModelMaster;

    $this -> title = 'Content';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Content
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'content/default/create-content'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create content
            </a>
        </div>
    </div><br>
    <div>
        <?php
            $form = ActiveForm::begin([
                'id' => 'create-job-form',
                'method' => 'post',
                'options' => [
                    'enctype' => 'multipart/form-data',
                ],
                'action' => Yii::$app->homeUrl . 'content/default/search-content'
            ]); 
        ?>
            <div class="row pd-search">
                <div class="col-lg-3 font-search">
                    Name or Title<br>
                    <input type="text" name="nt" class="font-input form-control" value="<?= isset($nt) ? $nt : '' ?>">
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-secondary bt-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
    <table class="table table-bordered table-hover text-center mt-3">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Content</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Subcontents</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                    <td colspan="12"> No data</td>
                </tr>
                <?php
                }
                ?>
        </tbody>

    </table>
</div>