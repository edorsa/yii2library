<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\edorsa\yii2library\src\models\Kirala */

$this->title = 'Kitap Kirala';
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kirala', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kirala-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
