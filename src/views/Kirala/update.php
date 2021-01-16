<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\edorsa\yii2library\src\models\Kirala */

$this->title = 'Kiralamayı Güncelle: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kirala', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->kiraid]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="kirala-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
