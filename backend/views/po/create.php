<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Po */

$this->title = 'Create Po';
$this->params['breadcrumbs'][] = ['label' => 'Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-create">
    <?= $this->render('_form', [
        'model' => $model,
        'modelsPoItem' => $modelsPoItem,
    ]) ?>
</div>
