<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Groups;
use app\models\Skills;

class NavWidget extends Widget
{
		public $activeGroup = null;
		public $activeSkill = null;

		public function run()
		{
				return $this->render('left_navigation', [
						'groups' => Groups::find()->all(),
						'skills' => Skills::find()->all(),
						'activeGroup' => ($this->activeGroup) ? $this->activeGroup : 0,
						'activeSkill' => $this->activeSkill,
				]);
		}
}