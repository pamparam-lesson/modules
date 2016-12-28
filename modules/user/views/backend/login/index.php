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
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <h1><?= Module::t('module','TITLE_LOGIN')?></h1>

                        <?= $form->field($model, 'username', [
                            'inputOptions' => [
                                'placeholder' => $model->getAttributeLabel('username'),
                            ],
                        ])->label(false); ?>

                        <?= $form->field($model, 'password')->passwordInput([
                                'placeholder' => $model->getAttributeLabel('password'),
                        ])->label(false);?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <?= Html::submitButton(Module::t('module', 'USER_BUTTON_LOGIN'), ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>

                <?php ActiveForm::end(); ?>
                <?= Html::a(Module::t('module','LINK_FORGOT_PASSWORD'), ['password-reset-request']) ?>
            </section>
        </div>
    </div>
</div>