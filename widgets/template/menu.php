<?

use yii\helpers\Url;

?>


<nav class="my-nav">
  <a href="/" class="navbar-link">All Goods</a>
  <? foreach ($data as $id) { ?>
    <a href="<?=Url::to(['collections/view', 'id'=>$id['collection']])?>" class="navbar-link">Коллекция <?=$id['collection']?></a>
  <? } ?>
</nav>

<style>
  .my-nav {
    display: flex;
    justify-content: center;
    align-content: center;
    margin-bottom: 3rem;
  }
  .my-nav a {
    margin-right: 2%;
  }
</style>