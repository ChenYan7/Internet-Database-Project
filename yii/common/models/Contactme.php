<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%contactme}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $feedback
 */
class Contactme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contactme}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'phone', 'email', 'feedback'], 'required'],
            [['id'], 'integer'],
            [['name', 'feedback'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 11],
            [['email'], 'string', 'max' => 50],
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
            'phone' => 'Phone',
            'email' => 'Email',
            'feedback' => 'Feedback',
        ];
    }
}
