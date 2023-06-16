<?php
    $this -> title = 'Section';
?>
<div class="col-lg-12">
    <div class="col-lg-12">
        <div class="col-lg-12 mt-4 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/section/create-section'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create section
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Branch</th>
                <th>Section</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use backend\models\tokyoconsulting\Branch;
                use common\models\ModelMaster;

                if(isset($section) && count($section)){
                    $i=1;
                    foreach ($section as $x) :
            ?>
            <tr id="section-<?= $x['sectionId']?>">
                <td><?= $i ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= $x["sectionName"] ?></td>
                <td><?= $x["sectionDetail"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/section/view-section/' . ModelMaster::encodeParams(["sectionId" => $x['sectionId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/section/update-section/' . ModelMaster::encodeParams(["sectionId" => $x['sectionId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteSection(<?= $x['sectionId'] ?>)">
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