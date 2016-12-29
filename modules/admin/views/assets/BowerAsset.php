<?php
/**
 * Created by PhpStorm.
 * User: pamparam
 * Date: 29.12.16
 * Time: 0:06
 */

namespace app\modules\admin\views\assets;

use yii\web\AssetBundle;

class BowerAsset extends AssetBundle
{

    // Эти файлы не доступны нам из web, так что мы определяем свойство sourcePath.
    // Обратите внимание, что используется алиас @vendor
    public $sourcePath = '@bower';
    public $css = [
        'nprogress/nprogress.css',
    ];
    public $js = [
        'fastclick/lib/fastclick.js',
        'nprogress/nprogress.js',
    ];

}