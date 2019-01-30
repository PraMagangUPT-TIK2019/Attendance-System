<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AbsensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absensi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Masukkan range tanggal presensi yang akan diambil laporannya.</p>
    <form action="" class="form-inline">
        <div class="form-group">
        <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="date" class="form-control" id="date">
                                    </div>
        </div>
        <span>:</span>
        <div class="form-group">
        <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="date" class="form-control" id="date">
                                    </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Go</button>
        </div>
    </form>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!-- <p>
        <?= Html::a('Tambah Data Laporan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_absensi',
            'status_kedatangan',
            'tanggal_waktu',
            'laporan_kerja:ntext',
            'nim',

            // [
            //     'class' => 'yii\grid\ActionColumn',
            //     'template' => '{view} {update} {delete}',
            //     'buttons' => [
            //         'view' => function($url, $model) {
            //         return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['view', 'id' => $model['id_absensi']], ['title' => 'View', 'id' => 'modal-btn-view']);
            //         },
            //         'update' => function($id, $model) {
            //             return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['update', 'id' => $model['id_absensi']], ['title' => 'Update', 'id' => 'modal-btn-view']);
            //         },
            //         'delete' => function($url, $model) {
            //             return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model['id_absensi']], ['title' => 'Delete', 'class' => '', 'data' => ['confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.', 'method' => 'post', 'data-pjax' => false],]);
            //         }
            //     ]
            // ],
        ],
    ]); ?> -->
    <?php Pjax::end(); ?>
</div>
