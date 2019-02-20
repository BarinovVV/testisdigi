
<?=\app\widgets\CollectionsWidget::widget()?>
<?
use yii\helpers\Url;
?>

<div class="goods">
        <? foreach ($goods as $good) {?>
            <div class="item item-<?=$good['collection']?>">
              <h4>Наименование: <?=$good['name']?></h4>
              <h4>Цена товара: <?=$good['price']?></h4>
<!--              <h4>Коллекция: --><?//=$good['collection']?><!--</h4>-->
              <a href="<?=Url::to(['good/index', 'name'=>$good['name']])?>" type="button" class="item-button__more btn btn-primary">Подробнее</a>

            </div>
        <? } ?>
</div>
<style>
    body {
        font-family: sans-serif;
    }
    .goods {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 1140px;
        margin: 0 auto;
    }
    .item {
        border: 3px solid grey;
        border-radius: 10px;
        padding: 10px;
        flex-basis: 30%;
        margin-right: 2%;
        height: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    .item-1{background-color: lightblue;}
    .item-2{background-color: lightcyan;}
    .item-3{background-color: lightgoldenrodyellow;}
    .item-4{background-color: linen;}
    .item-5{background-color: lightsteelblue;}
    .item-6{background-color: azure;}
    .item-7{background-color: gainsboro;}
    .collection{
        background-color: red;
        color: azure;
        font-size: 40px;
        border-color: darkgreen;
    }
</style>
