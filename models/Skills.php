<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property integer $id
 * @property string $name
 *
 * @property CustomersSkills[] $customersSkills
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skills';
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
     * @return \yii\db\ActiveQuery
     */
    public function getCustomersSkills()
    {
        return $this->hasMany(CustomersSkills::className(), ['skill_id' => 'id']);
    }
}
