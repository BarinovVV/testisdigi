<?php

namespace app\models;


use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    public static function tableName()
    {
        return 'goods';
    }

    public function getAllGoods() {
        return Goods::find()->asArray()->all();
    }

    public function getGoodsByCollection($id) {
        return Goods::find()->where(['collection' => $id])->asArray()->all();

    }

    public function getOneGood($name) {
        return Goods::find()->where(['name' => $name])->one();

    }


}