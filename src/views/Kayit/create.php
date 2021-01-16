<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\edorsa\yii2library\src\models\Kayit */

$this->title = 'Kayıt Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kayıt', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kayit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
