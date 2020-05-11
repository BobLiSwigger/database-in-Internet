<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dxyarea".
 *
 * @property int $id
 * @property string|null $continentName
 * @property string|null $continentEnglishName
 * @property string|null $countryName
 * @property string|null $countryEnglishName
 * @property string|null $provinceName
 * @property string|null $provinceEnglishName
 * @property string|null $province_zipCode
 * @property string|null $province_confirmedCount
 * @property string|null $province_suspectedCount
 * @property string|null $province_curedCount
 * @property string|null $province_deadCount
 */
class Dxyarea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dxyarea';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['continentName', 'continentEnglishName', 'countryName', 'countryEnglishName', 'provinceName', 'provinceEnglishName', 'province_zipCode', 'province_confirmedCount', 'province_suspectedCount', 'province_curedCount', 'province_deadCount'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'continentName' => 'Continent Name',
            'continentEnglishName' => 'Continent English Name',
            'countryName' => 'Country Name',
            'countryEnglishName' => 'Country English Name',
            'provinceName' => 'Province Name',
            'provinceEnglishName' => 'Province English Name',
            'province_zipCode' => 'Province Zip Code',
            'province_confirmedCount' => 'Province Confirmed Count',
            'province_suspectedCount' => 'Province Suspected Count',
            'province_curedCount' => 'Province Cured Count',
            'province_deadCount' => 'Province Dead Count',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DxyareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DxyareaQuery(get_called_class());
    }
}
