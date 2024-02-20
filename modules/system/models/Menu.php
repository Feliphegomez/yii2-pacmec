<?php

namespace app\modules\system\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property bool|null $is_primary
 * @property int|null $brand_image
 * @property string|null $brand_label
 * @property string|null $brand_options
 * @property string|null $brand_url
 * @property string|null $client_events
 * @property string|null $client_options
 * @property string|null $container_options
 * @property string|null $header_content
 * @property string|null $inner_container_options
 * @property string|null $options
 * @property bool|null $render_inner_container
 * @property string|null $screen_reader_toggle_text
 *
 * @property items[] $items
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'unique'],
            [['is_primary', 'render_inner_container'], 'boolean'],
            [['brand_options', 'brand_url', 'client_events', 'client_options', 'container_options', 'header_content', 'inner_container_options', 'options', 'screen_reader_toggle_text'], 'string'],
            [['name', 'brand_label', 'brand_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_primary' => 'Is Primary',
            'brand_image' => 'Brand Image',
            'brand_label' => 'Brand Label',
            'brand_options' => 'Brand Options',
            'brand_url' => 'Brand Url',
            'client_events' => 'Client Events',
            'client_options' => 'Client Options',
            'container_options' => 'Container Options',
            'header_content' => 'Header Content',
            'inner_container_options' => 'Inner Container Options',
            'options' => 'Options',
            'render_inner_container' => 'Render Inner Container',
            'screen_reader_toggle_text' => 'Screen Reader Toggle Text',
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(MenuItem::class, ['menu_id' => 'id']);
    }

    public static function addMenuSite() 
    {
        $query = static::find();
        // $query->andWhere($condition);
        $menus = $query->all();
        // $menus = self::findAll([
        //     'name' => 'top_primary'
        // ]);
        Yii::$app->params['menus']['top_primary'] = $menus;
        foreach ($menus as $menu) {
            // Yii::$app->params['menus']['top_primary'] = 
            Yii::$app->params['menus'][$menu->name] = $menu;
        }
        return true;
    }
}
