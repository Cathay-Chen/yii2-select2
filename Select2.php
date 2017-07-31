<?php

namespace yiichina\ckeditor;

use yii\Helpers\Html;

/**
 * This is just an example.
 */
class Select2 extends \yii\widgets\InputWidget
{
    public function init()
    {
        parent::init();
        $view = $this->getView();
        Select2BootstrapAsset::register($view);
		$view->registerJs("CKEDITOR.replace(\"{$this->options['id']}\")");
    }

    public function run()
    {
        return Html::activeTextarea($this->model, $this->attribute);
    }
}
