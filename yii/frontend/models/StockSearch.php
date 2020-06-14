<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Stock;

/**
 * StockSearch represents the model behind the search form of `frontend\models\Stock`.
 */
class StockSearch extends Stock
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'code', 'volume', 'tornover', 'tcap', 'mcap'], 'integer'],
            [['day', 'name'], 'safe'],
            [['price', 'height', 'low', 'open', 'yes_close', 'updown', 'percent'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
        $query = Stock::find();

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
        $query->andFilterWhere([
            'id' => $this->id,
            'day' => $this->day,
            'code' => $this->code,
            'price' => $this->price,
            'height' => $this->height,
            'low' => $this->low,
            'open' => $this->open,
            'yes_close' => $this->yes_close,
            'updown' => $this->updown,
            'percent' => $this->percent,
            'volume' => $this->volume,
            'tornover' => $this->tornover,
            'tcap' => $this->tcap,
            'mcap' => $this->mcap,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
