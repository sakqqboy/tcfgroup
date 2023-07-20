<?php

use backend\models\tokyoconsulting\Branch;
use common\models\tokyoconsulting\part;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Parts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="part-index">

    <div class="col-lg-12 mt-2 text-center font-title">
        <?= Html::encode($this->title) ?>
    </div>
    <?php
    $form = ActiveForm::begin([
        'id' => 'create-job-form',
        'method' => 'post',
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
        'action' => Yii::$app->homeUrl . 'part/part/search-part'
    ]);
    ?>
    <div class="col-lg-12">
        <div class="row mt-3 pd-search">
            <div class="col-lg-3">
                <div class="font-search">
                    Part Name
                </div>
                <input type="text" name="pn" class="font-input form-control" value="<?= isset($pn) ? $pn : '' ?>">
            </div>
            <div class="col-lg-3">
                <div class="font-search">
                    Branch
                </div>
                <select class="input-part form-control col-lg-6" name="branchId">
                    <?php
                    if (isset($branchId) && $branchId != '') {
                    ?>
                        <option value="<?= $branchId ?>"><?= Branch::branchName($branchId) ?></option>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($branchs) && count($branchs) > 0) {
                        foreach ($branchs as $br) :
                    ?>
                            <option value="<?= $br['branchId'] ?>"><?= $br['branchName'] ?></option>
                    <?php
                        endforeach;
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-3">
                <button type="submit" class="btn btn-secondary bt-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
    <?php
    ActiveForm::end();
    ?>
</div>


<div class="col-lg-12 text-end">
    <?= Html::a('<i class="fa fa-plus-circle" aria-hidden="true"></i> Create Part', ['create'], ['class' => 'btn btn-success']) ?>
</div>


<div class="col-12 toptab">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'partName',
            [
                "attribute" => "Branch Name",
                "value" => function ($model) {
                    $branch = Branch::BranchName($model->branchId);
                    return $branch;
                }
            ],
            'expirde',
            [
                "attribute" => "Status",
                "value" => function ($model) {
                    $branch = Branch::BranchName($model->status);
                    if ($model->status == 1) {
                        return "show";
                    } else {
                        return "hide";
                    }
                    return $branch;
                }
            ],
            //'createDateTime',
            //'updateDateTime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'partId' => $model->partId]);
                },
                'header' => 'Actions',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-eye"></i>', $url, [
                            'title' => 'View',
                            'class' => 'btn btn-info',
                            'data-pjax' => '0',
                        ]);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-pencil"></i>', $url, [
                            'title' => 'Update',
                            'class' => 'btn btn-warning',
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-trash"></i>', $url, [
                            'title' => 'Delete',
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],

            ],

        ],
    ]); ?>
</div>


</div>