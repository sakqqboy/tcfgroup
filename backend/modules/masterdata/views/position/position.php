<?php
    $this -> title = 'Position';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Position
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/position/create-position'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create position
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Branch</th>
                <th>Position</th>
                <th>Detail</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use backend\models\tokyoconsulting\Branch;
                use common\models\ModelMaster;

                if(isset($position) && count($position)){
                    $i=1;
                    foreach ($position as $x) :
            ?>
            <tr id="position-<?= $x['positionId']?>">
                <td><?= $i ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= $x["positionName"] ?></td>
                <td><?= $x["positionDetail"] ?></td>
                <td><?= $x["level"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/position/view-position/' . ModelMaster::encodeParams(["positionId" => $x['positionId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/position/update-position/' . ModelMaster::encodeParams(["positionId" => $x['positionId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deletePosition(<?= $x['positionId'] ?>)">
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