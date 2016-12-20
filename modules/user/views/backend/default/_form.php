<?php

use app\modules\user\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\user\Module;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newPassword')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newPasswordRepeat')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(User::getStatusesArray()) ?>

    <?= $form->field($model, 'role')->dropDownList(ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description')) ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? Module::t('module', 'BUTTON_CREATE') : Module::t('module', 'BUTTON_CREATE'),
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>