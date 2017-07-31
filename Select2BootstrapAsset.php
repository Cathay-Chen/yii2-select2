<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\select2;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Select2BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yiichina/yii2-select2/assets';

    public $css = [
        'select2-bootstrap.min.css',
    ];

    public $depends = array(
        'Select2Asset'
    );
}
