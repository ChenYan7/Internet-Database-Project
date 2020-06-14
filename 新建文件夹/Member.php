<?php

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
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => '姓名',
            'id' => '学号',
            'role' => '角色',
            'message' => '留言',
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

    public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
                ['member/view','id'=>$this->id,'name'=>$this->name]);
    }
}
