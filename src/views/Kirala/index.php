<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\edorsa\yii2library\src\models\KiralaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kirala';
$this->params['breadcrumbs'][] = ['label' => 'Kütüphane Modül', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kirala-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kitap Kirala', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kiraid',
            'name',
            'surname',
            'okulnumber',
            'kitapadi',
            'kitapyazari',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
