<?php


namespace app\models;

use yii\db\ActiveRecord;


class Index extends ActiveRecord{

 public function AllArticls() {
     $sql = 'Select ID,Articl_name,Date,Categories,Img_little,substring(Text, 1, 400) from aticls ORDER BY ID DESC LIMIT 5';
$model = Feeder::findbysql($sql)->asArray()->all();
      
 foreach ($model as $m){
               echo "<h2>".$m["Articl_name"]."</h1>";
               echo "<br>";
               echo "<h3>".$m["Date"]."(".$m["Categories"].")ID:".$m["ID"]."</h3>";
               echo "<br>";
               echo $m["Img_little"];
           echo $m["substring(Text, 1, 400)"];
           echo "<br>";
           echo "<p><a href= $m[Categories]?r=$m[ID]>Читать далее...</a></p>";
           echo "<br>";
           }
                   
    }
    public function OneArticl() {
        if(isset($_GET['r'])){
        $a = $_GET['r'];
                   
        $sql = 'Select ID,Articl_name,Date,Categories,Img_big,Text from aticls WHERE ID = '.$a.'';
        $model = Feeder::findbysql($sql)->asArray()->all();
     // вывод данных  
     
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
}





