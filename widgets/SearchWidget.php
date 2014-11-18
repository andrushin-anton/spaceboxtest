<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use app\helpers\CustomerHelper;

class SearchWidget extends Widget
{
		public $searchText = '';

		public function run()
		{
				return $this->render('search', [
						'searchText'	=>	$this->searchText,
						'dataUrl'	=>	Url::toRoute('/customer/'.CustomerHelper::getActiveGroup().'/'.CustomerHelper::getActiveSkill().'/'),
						'searchText'	=>	Html::encode($this->searchText),
				]);
		}
}