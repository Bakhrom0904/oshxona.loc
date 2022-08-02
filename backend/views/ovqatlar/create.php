<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ovqatlar */

$this->title = Yii::t('app', 'Create Ovqatlar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ovqatlars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ovqatlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
