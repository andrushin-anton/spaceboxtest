<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property integer $id
 * @property string $name
 *
 * @property CustomersGroups[] $customersGroups
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }

		/**
		 * @return mixed
		 */
		public function getCustomers()
		{
				return $this->hasMany(Customers::className(), ['id' => 'customer_id'])->via('customersGroups');
		}

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomersGroups()
    {
        return $this->hasMany(CustomersGroups::className(), ['group_id' => 'id']);
    }
}
