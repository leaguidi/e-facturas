<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FacturasMensajesNotificacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facturas-mensajes-notificacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facturaid')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mensajeid')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
