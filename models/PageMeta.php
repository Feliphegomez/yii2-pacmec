<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page_meta".
 *
 * @property int $id
 * @property int $page_id
 * @property string $slug
 * @property string $content
 *
 * @property Page $page
 */
class PageMeta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_meta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'slug', 'content'], 'required'],
            [['page_id'], 'integer'],
            [['content'], 'string'],
            [['slug'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::class, 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'slug' => 'Slug',
            'content' => 'Content',
        ];
    }

    /**
     * Gets query for [[Page]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::class, ['id' => 'page_id']);
    }
}
