<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    
    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Penduduk Badung</h2>

                <p><?= Html::a(Html::img(Yii::getAlias('@web/img/population_hi.png'), ['width' => '150']), (null !== Yii::$app->request->get('kecamatan_id')) ? ['clinic/index', 'faskes_id' => $faskes_id, 'type' => $type, 'citizens' => 'badung', 'kecamatan_id' => Yii::$app->request->get('kecamatan_id')] : ['clinic/index', 'faskes_id' => $faskes_id, 'type' => $type]);?></p>

               
            </div>
            <div class="col-lg-6">
                <h2>Penduduk Non Badung</h2>
                <p>
                    <?= Html::a(Html::img(Yii::getAlias('@web/img/12_Population_0.png'), ['width' => '150']), (null !== Yii::$app->request->get('kecamatan_id')) ? ['clinic/index', 'faskes_id' => $faskes_id, 'type' => $type, 'citizens' => 'nonbadung', 'kecamatan_id' => Yii::$app->request->get('kecamatan_id')] : ['clinic/index', 'faskes_id' => $faskes_id, 'type' => $type]); ?></p>            
            </div>
           
            <div class="col-lg-6">
                <h2>Batal atau Reprint</h2>

                <p>
                    <?= Html::a(Html::img(Yii::getAlias('@web/img/print.jpg'), ['width' => '300']), ['region/index', 'type' => 'puskesmas']); ?></p>            
            </div>
        </div>

    </div>
</div>