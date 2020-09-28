<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Producto') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'id_prove') ?>

    <?= $form->field($model, 'Existencia') ?>

    <?php // echo $form->field($model, 'Precio_venta') ?>

    <?php // echo $form->field($model, 'Autorizado') ?>

    <?php // echo $form->field($model, 'Iva') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
