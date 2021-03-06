<?php
/*
Team:Four little swans
coding by 苑华莹 1810780 郑惠麟 1811522
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dxyrumors".
 *
 * @property string|null $title
 * @property string|null $mainSummary
 * @property string|null $body
 * @property string|null $sourceUrl
 */
class Rumors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dxyrumors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'mainSummary', 'body', 'sourceUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'mainSummary' => 'Main Summary',
            'body' => 'Body',
            'sourceUrl' => 'Source Url',
        ];
    }
}