<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Country $model */

$this->title = $model->countryId;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'countryId' => $model->countryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'countryId' => $model->countryId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'countryId',
            'countryName',
            'continentId',
            'flag',
            'lat',
            'lng',
            'hasBranch',
            'status',
            'createDateTime',
            'updateDateTime',
        ],
    ]) ?>

</div>
