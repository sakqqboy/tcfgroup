<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\tokyoconsulting\part $model */

$this->title = 'CREATE PART';
$this->params['breadcrumbs'][] = ['label' => 'Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="part-create">


    <?= $this->render('_form', [
        'model' => $model,
        'branchs' => $branchs,
    ]) ?>

</div>