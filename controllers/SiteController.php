<?php

namespace app\controllers;

use app\models\Customers;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', [
						'customers' => Customers::find()->all(),
				]);
    }

		public function actionView()
		{
				$groupId = Yii::$app->request->get('groupId');
				$skillId = Yii::$app->request->get('skillId');
				$search = Yii::$app->request->get('search');

				$where = [];
				if(!empty($groupId))
						$where['customers_groups.group_id'] = (int)$groupId;
				if(!empty($skillId))
						$where['customers_skills.skill_id'] = (int)$skillId;

				$customers = Customers::find()
						->joinWith('customersGroups')
						->joinWith('customersSkills')
						->where($where);

				if (!empty($search))
				{
						$customers->andWhere(['like', 'customers.name', $search]);
				}

				return $this->render('index', [
						'customers' => $customers->all(),
				]);
		}
}
