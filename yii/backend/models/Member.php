<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%member}}".
 *
 * @property string $name
 * @property string $id
 * @property string|null $role
 * @property string|null $message
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%member}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id'], 'required'],
            [['message'], 'string'],
            [['name', 'id', 'role'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'id' => 'ID',
            'role' => 'Role',
            'message' => 'Message',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MemberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MemberQuery(get_called_class());
    }
}
