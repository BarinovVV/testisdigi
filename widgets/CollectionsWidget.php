<?php

namespace app\widgets;


use app\models\Collections;
use yii\base\Widget;

class CollectionsWidget extends Widget
{
    public $data;

    public function run()
    {
        $this->data = new Collections();
        $this->data = $this->data->getAllCollections();
        $this->data = $this->collectionsToTemplate($this->data);
        return $this->data;
    }

    public function collectionsToTemplate($data)
    {
        ob_start();
        include __DIR__.'/template/menu.php';
        return ob_get_clean();
    }
}