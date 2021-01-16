<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\edorsa\yii2library\src\models\KayitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kayıt Ol';
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kayit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yeni Kayıt Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'okulnumber',
            'fakulte',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
