<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Suratsipbidan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Suratsipbidans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratsipbidan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Export', ['export', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'tempatLahir',
            'tanggalLahir',
            'alamat_rumah',
            'alamat_praktik',
            'noSib',
            'noStr',
            'maxBerlaku',
        ],
    ]) ?>

</div>
