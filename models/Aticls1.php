<?php

namespace app\models;

use yii\db\ActiveRecord;

class Aticls extends ActiveRecord
{

    public function add($id)
    {
        if($id){
 $model = Aticls::deleteAll(['ID' => $id]);
// вывод данных
 if($model){echo 'Данные успешно удалены';}
 else {echo 'Извините, такой статьи не обнаружено!!!';}
        }
    }
}