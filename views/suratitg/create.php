<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Suratitg */

$this->title = 'Create Suratitg';
$this->params['breadcrumbs'][] = ['label' => 'Suratitgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suratitg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
