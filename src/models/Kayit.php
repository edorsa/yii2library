<?php

namespace vendor\edorsa\yii2library\src\models;

use Yii;

/**
 * This is the model class for table "kayit".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property int|null $okulnumber
 * @property string|null $fakulte
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Kayit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kayit';
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
            [['name', 'surname', 'fakulte'], 'string', 'max' => 255],
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
            'surname' => 'Surname',
            'okulnumber' => 'Okulnumber',
            'fakulte' => 'Fakulte',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
