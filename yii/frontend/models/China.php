<?php
/*
Team:Four little swans
coding by 苑华莹 1810780 郑惠麟 1811522
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%china}}".
 *
 * @property string $cityname
 * @property int $currentConfirmedCount
 * @property int $confirmedCount
 * @property int $suspectedCount
 * @property int $curedCount
 * @property int $deadCount
 * @property int $locationId
 */
class China extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%china}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cityname', 'currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'locationId'], 'required'],
            [['currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'locationId'], 'integer'],
            [['cityname'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cityname' => 'Cityname',
            'currentConfirmedCount' => 'Current Confirmed Count',
            'confirmedCount' => 'Confirmed Count',
            'suspectedCount' => 'Suspected Count',
            'curedCount' => 'Cured Count',
            'deadCount' => 'Dead Count',
            'locationId' => 'Location ID',
        ];
    }
}
