<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgentIdentification */

$this->title = 'Update Agent Identification: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Agent Identifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agent-identification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
