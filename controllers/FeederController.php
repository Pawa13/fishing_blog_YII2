<?php

namespace app\controllers;

use yii\web\Controller;


class FeederController extends Controller
{

    public function actionIndex()
    {
      
    if(isset($_GET['r'])){
      $this->layout = 'feeder';
    return $this->render('oneArticl');
     }
 else {
        
    

 return $this->render('index');}
    }

}   