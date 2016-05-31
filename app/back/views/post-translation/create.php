<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model back\models\PostTranslation */

$this->title = Yii::t('app', 'Create Post Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
