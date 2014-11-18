<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers_skills".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $skill_id
 *
 * @property Skills $skill
 * @property Customers $customer
 */
class CustomersSkills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers_skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'skill_id'], 'required'],
            [['customer_id', 'skill_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'skill_id' => 'Skill ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkill()
    {
        return $this->hasOne(Skills::className(), ['id' => 'skill_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customer_id']);
    }
}
