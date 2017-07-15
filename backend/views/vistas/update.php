<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vistas */

$this->title = 'Update Vista: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vistas-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
