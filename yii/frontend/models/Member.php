<?php

/*
Team:Four little swans
Coding by 陈燕 1811471
*/

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%member}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $gender
 * @property string|null $college
 * @property string|null $email
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
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['stu_id'],'string','max'=>10],
            [['name', 'gender'], 'string', 'max' => 20],
            [['college', 'email'], 'string', 'max' => 50],
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
            'name' => '姓名',
            'stu_id'=>'学号',
            'gender' => '性别',
            'college' => '学院',
            'email' => '邮箱',
            'message' => '座右铭',
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
