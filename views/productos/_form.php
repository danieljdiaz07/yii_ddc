<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Producto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prove')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_venta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Autorizado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Iva')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
