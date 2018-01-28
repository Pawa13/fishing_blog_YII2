<?php

namespace app\models;

use yii\db\ActiveRecord;

use Yii;



class Feeder extends ActiveRecord{

 public function AllArticls() {
      $model = Feeder::find()->select(['ID','Articl_name','Date','Categories','Img_little,substring(Text, 1, 400)'])
    ->from('aticls')
    ->where(['Categories' => 'Feeder'])
    ->limit(5)
    ->orderBy (['(ID)'=> SORT_DESC ] ) 
    ->asArray()
    ->all();
// вывод данных
       foreach ($model as $m){
               echo "<h2>".$m["Articl_name"]."</h1>";
               echo "<br>";
               echo "<h3>".$m["Date"]."(".$m["Categories"].")</h3>";
               echo "<br>";
               echo $m["Img_little"];
           echo $m["substring(Text, 1, 400)"];
           echo "<br>";
           echo "<p><a href= $m[Categories]?r=$m[ID]>Читать далее...</a></p>";
           echo "<br>";
       }
                   
    }

                   
    
    public function OneArticl() {
    
        $request = Yii::$app->request;
        $a = $request->get('r');    
       $model = Feeder::find()->select(['ID','Articl_name','Date','Categories','Img_big','Text'])
    ->from('aticls')
    ->where(['ID' => $a])
    ->asArray()
    ->all();
          foreach ($model as $m){
           echo "<h2>".$m["Articl_name"]."</h1>";
            echo "<br>";
           echo "<h3>".$m["Date"]."(".$m["Categories"].")</h3>";
           echo "<br>";
           echo $m["Img_big"];
           echo $m["Text"];
           echo "<br>";
            }
        }
    }





