<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\edorsa\yii2library\src\models\Kayit */

$this->title = 'Kayıt Düzenle: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kayıt', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="kayit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
