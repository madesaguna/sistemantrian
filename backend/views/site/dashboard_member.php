<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Dashboard Pasien';
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <?= Html::a('Reservasi Antrian', ['reservasi/poli']); ?>
            </div>
        </div>
    </div>
</div>
