<?php

namespace app\controllers;

use yii\web\Controller;


class SpinningController extends Controller
{

    public function actionIndex()
    {
      
    if(isset($_GET['r'])){
      $this->layout = 'one';
    return $this->render('oneArticl');
     }
 else {
        
    

 return $this->render('index');}
    }

}   