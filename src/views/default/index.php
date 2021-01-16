<?php

use yii\helpers\Html;
use yii\grid\GridView;



$this->title = 'Kütüphane Modül';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kayıt Olmaya Git', ['kayit/index'], ['class' => 'btn btn-success']) ?>
        
        <?= Html::a('Kitap Kiralamaya Git', ['kirala/index'], ['class' => 'btn btn-success']) ?>
    </p>
    

   
   


</div>
