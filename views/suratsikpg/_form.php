<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suratsikpg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suratsikpg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempatLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalLahir')->textInput() ?>

    <?= $form->field($model, 'tempatGigi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noSipg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noStrpg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maxBerlaku')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
