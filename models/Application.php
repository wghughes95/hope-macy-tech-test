<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return 'application';
    }
}