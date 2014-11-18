<?php

namespace  app\helpers;

use Yii;

class CustomerHelper
{
		public static function displayArrayInLine($array, $property)
		{
				$returnString = '';
				$lastKey = count($array) - 1;

				foreach($array as $key => $value)
				{
						$returnString .= $value->$property;
						if($key != $lastKey)
								$returnString .= ':';
				}

				return $returnString;
		}

		public static function displayIfIsInPlace($value)
		{
				$inAPlace = ['No', 'Yes'];
				if(isset($inAPlace[$value]))
					return $inAPlace[$value];
				else
					return 'Nobody knows(';
		}

		public static function getActiveGroup()
		{
				return (Yii::$app->request->get('groupId')) ? Yii::$app->request->get('groupId') : 0;
		}

		public static function getActiveSkill()
		{
				return (Yii::$app->request->get('skillId')) ? Yii::$app->request->get('skillId') : 0;
		}

		public static function getActiveSearch()
		{
				return (Yii::$app->request->get('search')) ? Yii::$app->request->get('search') : '';
		}
}