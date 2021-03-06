<?php

use app\modules\user\models\User;
use app\components\grid\{
    SetColumn,
    ActionColumn,
    LinkColumn
};
use app\modules\user\widgets\backend\grid\RoleColumn;
use kartik\date\DatePicker;
use yii\helpers\{Html, ArrayHelper};
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\user\Module;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\user\models\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('module', 'ADMIN_USERS');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Module::t('module', 'ADMIN_USERS_ADD'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date_from',
                    'attribute2' => 'date_to',
                    'type' => DatePicker::TYPE_RANGE,
                    'separator' => '-',
                    'pluginOptions' => ['format' => 'yyyy-mm-dd']
                ]),
                'attribute' => 'created_at',
                'format' => 'datetime',
            ],
            [
                'class' => LinkColumn::className(),
                'attribute' => 'username',
            ],
             'email:email',
            [
                'class' => SetColumn::className(),
                'filter' => User::getStatusesArray(),
                'attribute' => 'status',
                'name' => 'statusName',
                'cssCLasses' => [
                    User::STATUS_ACTIVE  => 'success',
                    User::STATUS_WAIT    => 'warning',
                    User::STATUS_BLOCKED => 'default',
                ],
            ],
            [
                'class' => RoleColumn::className(),
                'filter' => ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description'),
                'attribute' => 'role',
            ],
            ['class' => ActionColumn::className()],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
