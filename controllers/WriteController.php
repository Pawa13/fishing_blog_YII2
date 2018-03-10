<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Aticls;

// подключаем нашу модель
 
class WriteController extends Controller
{
    public function actionIndex() {
       Aticls::Aticls();
    }
    public function actionDelete() {
       Aticls::Delete();
    }
    
         public function actionUpdate()
    {  
    $this->layout = 'one';
    $request = Yii::$app->request;
    $resive = $request->post('Admin');
    $b = $resive['Id'];
            
    if($b){
    
     return $this->render('update', ['id'=> $b]); 
    }
 else {
       return $this->render('error', ['v' => 'Ошибка: Введите ID статьи!']); 
    }
    
               
}
    
         public function actionNew()
    {  
             
             Aticls::UpdateAtrticl();
             
    
    }
    
}