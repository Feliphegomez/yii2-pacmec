<?php

namespace app\modules\system\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property int $id
 * @property int $menu_id
 * @property int|null $parent_id
 * @property string $label
 * @property string $url
 * @property bool|null $visible
 * @property string|null $link_options
 * @property string|null $dropdown_options
 * @property bool|null $encode
 *
 * @property Menu $menu
 * @property items[] $items
 * @property MenuItem $parent
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'label', 'url'], 'required'],
            [['menu_id', 'parent_id'], 'integer'],
            [['label', 'url', 'link_options', 'dropdown_options'], 'string'],
            [['visible', 'encode'], 'boolean'],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['menu_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuItem::class, 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'parent_id' => 'Parent ID',
            'label' => 'Label',
            'url' => 'Url',
            'visible' => 'Visible',
            'link_options' => 'Link Options',
            'dropdown_options' => 'Dropdown Options',
            'encode' => 'Encode',
        ];
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::class, ['id' => 'menu_id']);
    }

    /**
     * Gets query for [[MenuItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(MenuItem::class, ['parent_id' => 'id']);
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(MenuItem::class, ['id' => 'parent_id']);
    }
}
