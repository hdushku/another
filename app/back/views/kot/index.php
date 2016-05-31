<?php
use back\models\Post;
/* @var $this yii\web\View */
?>
<h1>kot/index</h1>

<p>
    <?php
    $post = new Post();

// title attribute translation for default application language
$post->title = 'Post title';

// body attribute translation for default application language
$post->body = 'Post body';

// title attribute translation for German
$post->translate('de-DE')->title = 'Post titel';

// body attribute translation for German
$post->translate('de-DE')->body = 'Post inhalt';

// title attribute translation for Russian
$post->translate('ru-RU')->title = 'Заголовок поста';

// body attribute translation for Russian
$post->translate('ru-RU')->body = 'Тело поста';

// save post and its translations
$post->save();
    ?>
</p>
