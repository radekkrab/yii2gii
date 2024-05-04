<?php

namespace app\models;
use yii\db\ActiveRecord;


class ReplacementProduct extends ActiveRecord 
{

    public static function tableName()
     {
         return 'replacement_product';
     }
}
