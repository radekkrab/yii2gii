<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReplacementProduct $model */

$this->title = 'Update Replacement Product: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Replacement Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="replacement-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
