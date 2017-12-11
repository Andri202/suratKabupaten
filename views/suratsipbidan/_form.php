<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suratsipbidan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratsipbidan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempatLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalLahir')->textInput() ?>

    <?= $form->field($model, 'alamat_rumah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_praktik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noSib')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noStr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxBerlaku')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
