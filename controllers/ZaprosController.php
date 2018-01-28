<?php

namespace app\controllers;

use yii\web\Controller;

use app\models\Aticls;



class ZaprosController extends Controller
{

    public function actionIndex()
    {
       $cats = Aticls::find()->asArray()->all();
            print_r($cats);
    }
       

       
        }

   