<?php

use yii\helpers\Html;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
<?php foreach ($model as $kecamatan): ?>

<div class="col-md-4">
    <h2><?= Html::a($kecamatan->nama, ['health-service', 'kecamatan_id' => $kecamatan->id, 'type' => $type]); ?></h2>
    <p><?= Html::img(Yii::getAlias('@web/img/hospital-clipart-hospital-png-830x747.png'),['width' => '150', 'height' => '150']); ?></p>
</div>

<?php endforeach; ?>


</div>