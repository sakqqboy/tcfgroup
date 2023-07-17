<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\tokyoconsulting\part $model */

$this->title = 'UPDATE PART ID : ' . $model->partId;
$this->params['breadcrumbs'][] = ['label' => 'Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->partId, 'url' => ['view', 'partId' => $model->partId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="part-update">


    <?= $this->render('_form', [
        'model' => $model,
        'branchs' => $branchs,
    ]) ?>

</div>