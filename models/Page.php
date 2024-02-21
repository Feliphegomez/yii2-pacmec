<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string|null $visible
 *
 * @property PageMeta[] $pageMetas
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['title', 'slug', 'content'], 'required'],
            [['content', 'visible'], 'string'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'content' => 'Content',
            'visible' => 'Visible',
        ];
    }

    /**
     * Gets query for [[PageMetas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPageMetas()
    {
        return $this->hasMany(PageMeta::class, ['page_id' => 'id']);
    }
}
