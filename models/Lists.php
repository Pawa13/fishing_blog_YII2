<?php

namespace app\models;

use yii\db\ActiveRecord;

use Yii;



class Lists extends ActiveRecord{

 public function AllArticls() {
      $model = Lists::find()->select(['ID','Articl_name','Date','Categories'])
    ->from('aticls')
    ->asArray()
    ->all();
// вывод данных
      
    echo '<table class="table table-bordered"><thead>
    <tr bgcolor="#000080">
      <th><p class="text-info">ID</p></th>
      <th><p class="text-info">Название статьи</p></th>
      <th><p class="text-info">Категория</p></th>
      <th><p class="text-info">Дата добавления</p></th>
    </tr>
  </thead>';
       foreach ($model as $m){
          
                  echo "<tr><td>".$m["ID"]."</td><td>".$m["Articl_name"]."</td><td>".$m["Categories"]."</td><td>".$m["Date"]."</td></tr>";
               
            } 
         echo "</table>";  
         
       }
                   
    }
  
    
