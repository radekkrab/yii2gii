<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReplacementProduct $model */

$this->title = 'Create Replacement Product';
$this->params['breadcrumbs'][] = ['label' => 'Replacement Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="replacement-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
