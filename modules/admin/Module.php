<?php

namespace app\modules\admin;

use yii\filters\AccessControl;
use yii\console\Application as ConsoleApplication;
use Yii;
use app\modules\admin\rbac\Rbac as AdminRbac;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [AdminRbac::PERMISSION_ADMIN_PANEL],
                    ],
                ],
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/admin/' . $category, $message, $params, $language);
    }
}