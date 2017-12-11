<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratsipbidanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suratsipbidans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratsipbidan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suratsipbidan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tempatLahir',
            'tanggalLahir',
            'alamat_rumah',
            // 'alamat_praktik',
            // 'noSib',
            // 'noStr',
            // 'maxBerlaku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
