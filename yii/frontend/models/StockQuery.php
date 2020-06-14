<?php
/*
Team:Four little swans
Coding by 苑华莹1810780 
*/
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Stock]].
 *
 * @see Stock
 */
class StockQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Stock[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Stock|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
