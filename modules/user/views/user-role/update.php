<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model maximkozhin\user\models\UserRole */

$this->title = 'Update User Role: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'alias' => $model->alias]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
