<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\eav\models\EavAttributeType */

$this->title = Yii::t('art', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/eav', 'EAV'), 'url' => ['/eav/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/eav', 'Attribute Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eav-attribute-type-update">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title"><?=  Html::encode($this->title) ?></h3>            
        </div>
    </div>
    <?= $this->render('_form', compact('model')) ?>
</div>