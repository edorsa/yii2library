<?php

namespace vendor\edorsa\yii2library\src\models;

use Yii;

/**
 * This is the model class for table "kirala".
 *
 * @property int $kiraid
 * @property string|null $name
 * @property string|null $surname
 * @property int|null $okulnumber
 * @property string|null $kitapadi
 * @property string|null $kitapyazari
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Kirala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kirala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okulnumber','name','surname'], 'required'],//boş bırakılamaz diye mesaj üretiyor.
            [['okulnumber'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'surname', 'kitapadi', 'kitapyazari'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kiraid' => 'Kiraid',
            'name' => 'Name',
            'surname' => 'Surname',
            'okulnumber' => 'Okulnumber',
            'kitapadi' => 'Kitapadi',
            'kitapyazari' => 'Kitapyazari',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
