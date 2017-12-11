<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suratsipbidan */

$this->title = 'Update Suratsipbidan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suratsipbidans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="suratsipbidan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
