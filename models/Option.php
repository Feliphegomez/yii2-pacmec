<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "option".
 *
 * @property int $id
 * @property string $option_name
 * @property string $option_value
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['option_name', 'option_value'], 'required'],
            [['option_value'], 'string'],
            [['option_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'option_name' => 'Nombre',
            'option_value' => 'Valor',
        ];
    }
}
