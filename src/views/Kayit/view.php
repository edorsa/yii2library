<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\edorsa\yii2library\src\models\Kayit */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];

$this->params['breadcrumbs'][] = ['label' => 'Kayıt', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kayit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Düzenle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silmek istediğinizden emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surname',
            'okulnumber',
            'fakulte',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
