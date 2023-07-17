<?php

use backend\models\tokyoconsulting\Branch;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\tokyoconsulting\part $model */

$this->title = $model->partId;
$this->params['breadcrumbs'][] = ['label' => 'Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="part-view">
    <div class="col-12">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'partId' => $model->partId], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'partId' => $model->partId], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'partId',
            'partName',
            [
                "attribute" => "Branch Name",
                "value" => function ($model) {
                    $branch = Branch::BranchName($model->branchId);
                    return $branch;
                }
            ],
            'expirde',
            'status',
        ],
    ]) ?>

</div>