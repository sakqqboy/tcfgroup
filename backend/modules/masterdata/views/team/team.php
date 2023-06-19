<?php
    $this -> title = 'Team';
?>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12 mt-4 text-center font-title">
            Team
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-end">
            <a class="btn btn-success buttons-size" href="<?=Yii::$app->homeUrl.'/masterdata/team/create-team'?>">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Create team
            </a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover text-center">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Team</th>
                <th>Branch</th>
                <th>Section</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                use backend\models\tokyoconsulting\Branch;
                use backend\models\tokyoconsulting\Section;
                use common\models\ModelMaster;

                if(isset($team) && count($team)){
                    $i=1;
                    foreach ($team as $x) :
            ?>
            <tr id="team-<?= $x['teamId']?>">
                <td><?= $i ?></td>
                <td><?= $x["teamName"] ?></td>
                <td><?= Branch::branchName($x['branchId']) ?></td>
                <td><?= Section::sectionName($x['sectionId']) ?></td>
                <td><?= $x["teamDetail"] ?></td>
                <td width="20%" >
                    <a class="btn btn-primary bt-size" href="<?=Yii::$app->homeUrl.'masterdata/team/view-team/' . ModelMaster::encodeParams(["teamId" => $x['teamId']])?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning bt-size" href="<?=Yii::$app->homeUrl.'masterdata/team/update-team/' . ModelMaster::encodeParams(["teamId" => $x['teamId']])?>">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-danger bt-size" href="javascript:deleteTeam(<?= $x['teamId'] ?>)">
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