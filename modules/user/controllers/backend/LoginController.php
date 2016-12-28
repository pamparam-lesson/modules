<?php
namespace app\modules\user\controllers\backend;

use app\modules\user\forms\frontend\PasswordResetRequestForm;
use app\modules\user\forms\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class LoginController extends Controller
{
    /**
     * @var \app\modules\user\Module
     */
    public $module;
    public $layout = 'login';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionPasswordResetRequest()
    {
        $model = new PasswordResetRequestForm($this->module->passwordResetTokenExpire);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Спасибо! На ваш Email было отправлено письмо со ссылкой на восстановление пароля.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Извините. У нас возникли проблемы с отправкой.');
            }
        }

        return $this->render('passwordResetRequest', [
            'model' => $model,
        ]);
    }
}