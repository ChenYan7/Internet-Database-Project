<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%stock}}".
 *
 * @property int $id
 * @property string|null $day
 * @property int|null $code
 * @property string|null $name
 * @property float|null $price
 * @property float|null $height
 * @property float|null $low
 * @property float|null $open
 * @property float|null $yes_close
 * @property float|null $updown
 * @property float|null $percent
 * @property int|null $volume
 * @property int|null $tornover
 * @property int|null $tcap
 * @property int|null $mcap
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stock}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day'], 'safe'],
            [['code', 'volume', 'tornover', 'tcap', 'mcap'], 'integer'],
            [['price', 'height', 'low', 'open', 'yes_close', 'updown', 'percent'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'day' => Yii::t('app', 'Day'),
            'code' => Yii::t('app', 'Code'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'height' => Yii::t('app', 'Height'),
            'low' => Yii::t('app', 'Low'),
            'open' => Yii::t('app', 'Open'),
            'yes_close' => Yii::t('app', 'Yes Close'),
            'updown' => Yii::t('app', 'Updown'),
            'percent' => Yii::t('app', 'Percent'),
            'volume' => Yii::t('app', 'Volume'),
            'tornover' => Yii::t('app', 'Tornover'),
            'tcap' => Yii::t('app', 'Tcap'),
            'mcap' => Yii::t('app', 'Mcap'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return StockQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StockQuery(get_called_class());
    }
}
