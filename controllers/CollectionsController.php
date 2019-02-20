<?php

namespace app\controllers;
use app\models\Collections;
use app\models\Goods;


use yii\web\Controller;

class CollectionsController extends Controller
{
    public function actionIndex() {
        $goods = new Goods();
        $goods = $goods->getAllGoods();

        $collections = new Collections();
        $collections = $collections->getAllCollections();
        return $this->render('index', compact('goods', 'collections'));
    }

    public function actionView($id) {
         $goods = new Goods();
         $goods = $goods->getGoodsByCollection($id);
         return $this->render('view', compact('goods'));
    }
}