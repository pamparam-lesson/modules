<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\views\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public  $sourcePath = '@app/modules/admin/views/assets';
    public $css = [
        'css/custom.min.css',
    ];
    public $js = [
        'js/custom.min.js',
    ];
    public $depends = [
        'app\assets\Html5ShivAsset',
        'app\assets\RespondAsset',
        'yii\web\YiiAsset',
        'app\modules\admin\views\assets\BootstrapAsset',
        'app\assets\FontAwesomeAsset',
        'app\modules\admin\views\assets\BowerAsset',

    ];
}
