<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="product-index">

    <?php Pjax::begin(); ?>

    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_item'
    ]) ?>

    <?php Pjax::end(); ?>
</div>
