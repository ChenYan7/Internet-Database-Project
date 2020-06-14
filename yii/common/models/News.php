<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%dxynews}}".
 *
 * @property string|null $pubDate
 * @property string|null $title
 * @property string|null $summary
 * @property string|null $infoSource
 * @property string|null $sourceTrl
 * @property string|null $province
 * @property string|null $provinceId
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%dxynews}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pubDate', 'title', 'summary', 'infoSource', 'sourceTrl', 'province', 'provinceId'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pubDate' => 'Pub Date',
            'title' => 'Title',
            'summary' => 'Summary',
            'infoSource' => 'Info Source',
            'sourceTrl' => 'Source Trl',
            'province' => 'Province',
            'provinceId' => 'Province ID',
        ];
    }
}
