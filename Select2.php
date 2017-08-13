<?php

namespace yiichina\select2;

use yii\Helpers\Html;
use yii\helpers\Json;

/**
 * This is just an example.
 */
class Select2 extends \yii\widgets\InputWidget
{
    public $bootstrapTheme = false;
    public $selection = null;
    public $items = [];
    public $select2Options = [];
    public $multiple = false;

    public function init()
    {
        parent::init();
        $view = $this->getView();
        Select2Asset::register($view);
        if($this->bootstrapTheme == true) {
            Select2BootstrapAsset::register($view);
            $this->select2Options = array_merge($this->select2Options, ['theme' => 'bootstrap']);
        }
        $select2Options = Json::encode($this->select2Options);
        if($this->multiple == true) {
            $this->options = array_merge($this->options, ['multiple' => 'multiple']);
        }
		$view->registerJs("$('#{$this->options['id']}').select2($select2Options)");
    }

    public function run()
    {
        if ($this->hasModel()) {
            return Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            return Html::dropDownList($this->name, $this->selection, $this->items, $this->options);
        }
    }
}
