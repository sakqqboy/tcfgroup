<?php

use common\models\ModelMaster;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

]); ?>
<div class="col-lg-12 mymember text-end">
    <a href="<?= Yii::$app->homeUrl . 'site/create-member' ?>" class="btn btn-success">+ Create Content</a>
</div>

<div class="col-lg-12 text-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Content ID</th>
                <th>Content Name</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($contents) && count($contents) > 0) {
                $i = 1;
                foreach ($contents as $a) :
            ?>
                    <tr id="content-<?= $a['contentId'] ?>">
                        <td><?= $a["contentId"] ?></td>
                        <td id="contentName-<?= $a["contentId"] ?>"><?= $a["contentName"] ?></td>
                        <td><?= $a["title"] ?></td>
                        <td><?= $a["detail"] ?></td>

                        <td width="15%">

                            <a href="<?= Yii::$app->homeUrl . 'content/default/view-content/' . ModelMaster::encodeParams(["contentId" => $a['contentId'], "contentName" => $a['contentName']]) ?>" class="btn btn-primary"> <i class="fa fa-solid fa-eye"></i> </a>

                            <a href="<?= Yii::$app->homeUrl . 'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $a['contentId'], "contentName" => $a['contentName']])  ?>" class="btn btn-warning"> <i class="fa fa-pencil" aria-hidden="true"> </i></a>

                            <a href="<?= Yii::$app->homeUrl . '' . ModelMaster::encodeParams(["contentId" => $a['contentId'], "contentName" => $a['contentName']])  ?>" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"> </i></a>

                        </td>
                    </tr>
                <?php
                    $i++;
                endforeach;
            } else { ?>
                <tr>
                    <td colspan="3"> ไม่มีข้อมูล</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php ActiveForm::end(); ?>