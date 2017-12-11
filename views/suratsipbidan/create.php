<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suratsipbidan */

$this->title = 'Create Suratsipbidan';
$this->params['breadcrumbs'][] = ['label' => 'Suratsipbidans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratsipbidan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
