<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Movie
 * @package app\models
 * @property string $name
 * @property int $id
 */
class Movie extends ActiveRecord
{
    public static function tableName()
    {
        return 'movie';
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
}