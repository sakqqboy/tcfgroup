<?php

use backend\models\tokyoconsulting\Branch;
use common\models\tokyoconsulting\part;
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