<?php

use yii\helpers\Html;
use app\modules\user\Module;
use app\modules\admin\Module as AdminModule;

/* @var $this yii\web\View */
/* @var $model \app\modules\user\models\User */

$this->title = AdminModule::t('module', 'ADMIN');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a(Module::t('module', 'ADMIN_USERS'), ['/admin/user/default/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
