<?php
    $this -> title = 'Team Position';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Team Position
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/team-position/create-team-position'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create teamposition
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use backend\models\tokyoconsulting\Branch;
                                                            use backend\models\tokyoconsulting\Section;
                                                            use common\models\ModelMaster;

                if(isset($teamposition) && count($teamposition)){
                    $i=1;
                    foreach ($teamposition as $x) :
            ?>
            <tr id="id-<?= $x['id']?>">
                <td><?= $i ?></td>
                <td><?= $x["name"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/team-position/view-team-position/' . ModelMaster::encodeParams(["id" => $x['id']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/team-position/update-team-position/' . ModelMaster::encodeParams(["id" => $x['id']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteTeamPosition(<?= $x['id'] ?>)">
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