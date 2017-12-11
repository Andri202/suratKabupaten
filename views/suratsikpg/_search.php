<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratsikpgSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratsikpg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tempatLahir') ?>

    <?= $form->field($model, 'tanggalLahir') ?>

    <?= $form->field($model, 'tempatGigi') ?>

    <?php // echo $form->field($model, 'noSipg') ?>

    <?php // echo $form->field($model, 'noStrpg') ?>

    <?php // echo $form->field($model, 'maxBerlaku') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
