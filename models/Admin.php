<?php

namespace app\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public $name;
    public $password;
    public $id;
    public $categories;

    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            ['name','Name'],['password','Password']
            
        ];
    }
    public function Name($attrs) {
        if (!in_array($this->$attrs, ['Admin'])){
            $this->addError($attrs, 'Неверное имя пользователя!!!');
        }
    }
    public function Password($attrs) {
        if (!in_array($this->$attrs, ['13'])){
            $this->addError($attrs, 'Неверный пароль!!!');
        }
    }
}
