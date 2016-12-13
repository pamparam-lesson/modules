<?php
/**
 * Created by PhpStorm.
 * User: pamparam
 * Date: 13.12.16
 * Time: 10:42
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\base\View;

class FontAwesomeAsset extends AssetBundle
{

    // Эти файлы не доступны нам из web, так что мы определяем свойство sourcePath.
    // Обратите внимание, что используется алиас @vendor
    public $sourcePath = '@vendor/fortawesome/font-awesome';
    public $css = [ 'css/font-awesome.css',];

}