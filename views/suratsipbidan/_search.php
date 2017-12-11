<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratsipbidanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratsipbidan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tempatLahir') ?>

    <?= $form->field($model, 'tanggalLahir') ?>

    <?= $form->field($model, 'alamat_rumah') ?>

    <?php // echo $form->field($model, 'alamat_praktik') ?>

    <?php // echo $form->field($model, 'noSib') ?>

    <?php // echo $form->field($model, 'noStr') ?>

    <?php // echo $form->field($model, 'maxBerlaku') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
