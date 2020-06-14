<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

namespace backend\models;

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
            [['id'], 'unique'],
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

    /**
     * {@inheritdoc}
     * @return ContactmeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContactmeQuery(get_called_class());
    }

    public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
                ['contactme/view','id'=>$this->id,'name'=>$this->name]);
    }

    public function getBeginning($length=50)
    {
        $tmpStr = strip_tags($this->feedback);
        $tmpLen = mb_strlen($tmpStr);
         
        $tmpStr = mb_substr($tmpStr,0,$length,'utf-8');
        return $tmpStr.($tmpLen>$length?'...':'');
    }
}
