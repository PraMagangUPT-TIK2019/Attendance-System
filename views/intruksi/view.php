<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Intruksi */

$this->title = 'Lihat intruksi ' . $model->id_instruksi;
$this->params['breadcrumbs'][] = ['label' => 'Intruksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="intruksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="fa fa-edit"></span> Update', ['update', 'id' => $model->id_instruksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<span class="fa fa-trash"></span> Delete', ['delete', 'id' => $model->id_instruksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_instruksi',
            'judul:ntext',
            'deskripsi:ntext',
        ],
    ]) ?>

</div>
