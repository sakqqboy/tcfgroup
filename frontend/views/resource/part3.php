<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<table class="table table-striped mt-50">
    <thead class="table1">
        <tr>
            <?php
            if (isset($description) && count($description) > 0) {
                $i = 0;
                foreach ($description as $dc) :
            ?>
            <th><?= $dc['title'] ?></th>
            <th><?= $dc['detail'] ?></th>
            <th><?= $dc['detail2'] ?></th>
            <th><?= $dc['detail3'] ?></th>
            <th><?= $dc['detail4'] ?></th>
            <th><?= $dc['detail5'] ?></th>
            <?php
                    $i++;
                endforeach;
            }
            ?>
        </tr>
    </thead>

    <?php
    if (isset($tabledetail) && count($tabledetail) > 0) {
        $i = 0;
        foreach ($tabledetail  as  $td) :
            if ($i < 20) {

    ?>
    <tbody class="table2">
        <tr>
            <th scope="row" style="color:#0078C8;"><?= $td['title'] ?></th>
            <td><?= $td['detail'] ?></td>
            <td><?= $td['detail2'] ?></td>
            <td><?= $td['detail3'] ?></td>
            <td><?= $td['detail4'] ?></td>
            <td class="fot-sm"><button type="button" class="btn btn-primary td-download"><i class="fa fa-cloud-download"
                        aria-hidden="true"></i> <?= $td['detail5'] ?></button></td>
        </tr>
    </tbody>
    <?php
            }
            $i++;
        endforeach;
    }
    ?>

</table>
<div class="col-12 text-end mt-3">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($des) && !empty($des)) {
    ?>
    <span class=" col-12 text-end">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $des['contentBranchId']]) ?>"
            target="_blank">Edit (TP)(<?= $branchName ?>)</a>
    </span>
    <?php
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($blede) && !empty($blede)) {
    ?>
    <span class=" col-12 text-end">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $blede['contentBranchId']]) ?>"
            target="_blank">Edit (D)(<?= $branchName ?>)</a>
    </span>
    <?php
    }
    ?>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <span class="of-13"> Page &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp; of &nbsp;&nbsp;13</span>
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>