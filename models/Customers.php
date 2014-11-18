<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $name
 * @property integer $is_in_place
 *
 * @property CustomersGroups[] $customersGroups
 * @property CustomersSkills[] $customersSkills
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['is_in_place'], 'integer'],
            [['name'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_in_place' => 'Is In Place',
        ];
    }

		/**
		 * @return mixed
		 */
		public function getGroups()
		{
				return $this->hasMany(Groups::className(), ['id' => 'group_id'])->via('customersGroups');
		}

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomersGroups()
    {
        return $this->hasMany(CustomersGroups::className(), ['customer_id' => 'id']);
    }

		/**
		 * @return mixed
		 */
		public function getSkills()
		{
				return $this->hasMany(Skills::className(), ['id' => 'skill_id'])->via('customersSkills');
		}

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomersSkills()
    {
        return $this->hasMany(CustomersSkills::className(), ['customer_id' => 'id']);
    }
}
