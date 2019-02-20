<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 20.02.2019
 * Time: 12:19
 */

namespace app\controllers;


use app\models\Goods;
use yii\web\Controller;

class GoodController extends Controller
{
    public function actionIndex($name) {
        $good = new Goods();
        $good = $good->getOneGood($name);
        return $this->render('index', compact('good'));
    }
}