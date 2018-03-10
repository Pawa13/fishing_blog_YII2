<?php
namespace app\models;
use yii\web\Request;
use yii\db\ActiveRecord; // подключаем ActiveRecord потому что будем работать с базой данных
use Yii;
 
class Aticls extends ActiveRecord {
     
    public function Aticls()
    {
        $request = Yii::$app->request;
    $resive = $request->post('Admin');
          
$model = new Aticls;
$model->Text = $resive['Text'];
$model->Categories = $resive['Categories'];
$model->Articl_name = $resive['Articl_name'];
// сохраняем запись
$model->insert(); 
if($model){echo 'Данные успешно добавлены!';}
 else {echo 'Извините, данные не добалены!!!';}
        }
    
     public function Delete()
    {
          $request = Yii::$app->request;
    $resive = $request->post('Admin');
    $id = $resive['Id'];
$model = Aticls::deleteAll(['ID' => $id]);
// вывод данных
 if($model){echo 'Данные успешно удалены';}
 else {echo 'Извините, такой статьи не обнаружено!!!';}
        }
public function Add($id)
    {
     $model = Aticls::find()->select(['Text'])
    ->from('aticls')
    ->where(['ID' => $id])
    ->asArray()
    ->all();
     if($model){
          foreach ($model as $m){
         
           echo $m["Text"];
          }
     }
 else {echo 'СТАТЬИ С ТАКИМ ID НЕ СУЩЕСТВУЕТ!!!';}
           
           
        }
        public function Articl_name($id)
    {
   $model = Aticls::find()->select(['Articl_name'])
    ->from('aticls')
    ->where(['ID' => $id])
    ->asArray()
    ->all();
          foreach ($model as $m){
         
           echo $m["Articl_name"];
                     
            }

        }
           public function UpdateAtrticl()
    {
        $request = Yii::$app->request;
    $resive = $request->post('Admin');
    $id = $resive['id'];
                
// Запрос с выборкой
$model = Aticls::find()->where(['id' => $id])->one();
// изменяем 
if($model){
$model->Text = $resive['Text'];
// сохраняем 
$model->save();
echo 'Данные успешно добавлены!';
/*if($model){echo 'Данные успешно добавлены!';}
 else {echo 'Извините, данные не добалены!!!';}*/
}
       else {echo 'Извините, данные не добалены!!!';}
       }
    }

?>
