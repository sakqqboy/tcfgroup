<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Country $model */

$this->title = 'Update Country: ' . $model->countryId;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->countryId, 'url' => ['view', 'countryId' => $model->countryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
