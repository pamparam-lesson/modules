<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\modules\user\Module;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\modules\user\forms\LoginForm */
$this->title = Module::t('module', 'TITLE_LOGIN');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-default-login">
    <h1><?= Yii::$app->controller->module->id . '/'. Yii::$app->controller->id . '/' . Yii::$app->controller->action->id ?>77777tttttttttttttttttt</h1>
    <?php
    echo 'Текущий контроллер - '.Yii::$app->controller->id;
    echo 'Текущий action - '.Yii::$app->controller->action->id;
    echo 'Текущий модуль (module) - '.Yii::$app->controller->module->id;
    ?>
    <p><?= Module::t('module', 'PLEASE_FILL_FOR_LOGIN') ?></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <div class="form-group">
                <?= Html::submitButton(Module::t('module', 'USER_BUTTON_LOGIN'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>