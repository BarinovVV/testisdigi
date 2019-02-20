<?php

namespace app\models;


use yii\db\ActiveRecord;

class Collections extends ActiveRecord
{
    public static function tableName()
    {
        return 'collections';
    }

    public function getAllCollections() {
        return Collections::find()->asArray()->all();
    }
}