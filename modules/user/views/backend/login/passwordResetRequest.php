<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\user\forms\frontend\PasswordResetRequestForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\modules\user\Module;

$this->title = Module::t('module', 'TITLE_PASSWORD_RESET');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-password-reset-request">
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?php $form = ActiveForm::begin(['id' => 'password-reset-request-form']); ?>
                <h1><?= Html::encode($this->title) ?></h1>
                <p><?= Module::t('module', 'PLEASE_FILL_FOR_RESET_REQUEST') ?></p>

                <?= $form->field($model, 'email', [
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('email'),
                ], ])->label(false); ?>

                <div class="form-group">
                <?= Html::submitButton(Module::t('module', 'BUTTON_SEND'), ['class' => 'btn btn-primary']) ?>
                </div>

                <?= Html::a(Module::t('module','LINK_BACK'), ['/admin/user/login']) ?>
                <?php ActiveForm::end(); ?>
            </section>
        </div>
    </div>


</div>