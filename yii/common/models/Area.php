<?php
/*
Team:Four little swans
coding by 郑惠麟 1811522
*/
namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "{{%dxyarea}}".
 *
 * @property string|null $locationId
 * @property string|null $continentName
 * @property string|null $continentEnglishName
 * @property string|null $countryName
 * @property string|null $countryEnglishName
 * @property string|null $countryFullName
 * @property string|null $provinceName
 * @property string|null $provinceEnglishName
 * @property string|null $provinceShortName
 * @property string|null $currentConfirmedCount
 * @property string|null $confirmedCount
 * @property string|null $suspectedCount
 * @property string|null $curedCount
 * @property string|null $deadCount
 * @property string|null $comment
 * @property string|null $cities
 * @property string|null $updateTime
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Dxyarea}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['locationId', 'continentName', 'continentEnglishName', 'countryName', 'countryEnglishName', 'countryFullName', 'provinceName', 'provinceEnglishName', 'provinceShortName', 'currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'comment', 'cities', 'updateTime'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'continentName' => 'Continent Name',
            'continentEnglishName' => 'Continent English Name',
            'countryName' => 'Country Name',
            'countryEnglishName' => 'Country English Name',
            'countryFullName' => 'Country Full Name',
            'provinceName' => 'Province Name',
            'provinceEnglishName' => 'Province English Name',
            'provinceShortName' => 'Province Short Name',
            'currentConfirmedCount' => 'Current Confirmed Count',
            'confirmedCount' => 'Confirmed Count',
            'suspectedCount' => 'Suspected Count',
            'curedCount' => 'Cured Count',
            'deadCount' => 'Dead Count',
            'comment' => 'Comment',
            'cities' => 'Cities',
            'updateTime' => 'Update Time',
        ];
    }
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Area::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'countryName', $this->countryName])
            ->andFilterWhere(['like', 'currentConfirmedCount', $this->currentConfirmedCount])
            ->andFilterWhere(['like', 'confirmedCount', $this->confirmedCount])
            ->andFilterWhere(['like', 'suspectedCount', $this->suspectedCount])
            ->andFilterWhere(['like','curedCount',$this->curedCount])
            ->andFilterWhere(['like','deadCount',$this->deadCount]);
            //->andFilterWhere(['like','updateTime',$this->updateTime]);

        return $dataProvider;
    }
}
