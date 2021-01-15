<?php

namespace mosaka0\hayvanlar\models;

use Yii;

/**
 * This is the model class for table "hayvanlarsil".
 *
 * @property int $id
 * @property string|null $isim
 * @property string|null $kilo
 * @property string|null $boy
 * @property string|null $tür
 */
class Hayvanlarsil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hayvanlarsil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'kilo', 'boy', 'tür'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'kilo' => 'Kilo',
            'boy' => 'Boy',
            'tür' => 'Tür',
        ];
    }
}
