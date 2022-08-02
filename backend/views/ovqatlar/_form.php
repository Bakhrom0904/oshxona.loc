<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ovqatlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ovqatlar-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'turi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'narxi')->textInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
