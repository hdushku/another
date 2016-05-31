<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model back\models\PostTranslation */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Post Translation',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'post_id' => $model->post_id, 'language' => $model->language]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="post-translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
