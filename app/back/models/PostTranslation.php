<?php

namespace back\models;

use Yii;

/**
 * This is the model class for table "post_translation".
 *
 * @property integer $post_id
 * @property string $language
 * @property string $title
 * @property string $body
 */
class PostTranslation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_translation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'language', 'title', 'body'], 'required'],
            [['post_id'], 'integer'],
            [['body'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => Yii::t('app', 'Post ID'),
            'language' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
}
