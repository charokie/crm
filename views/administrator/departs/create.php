<?php

use yii\helpers\Html;


$this->title = 'Create department';
$this->params['breadcrumbs'][] = ['label' => 'Admin panel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['departments']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>