<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Admin;
use yii\web\Request;


class AdminController extends Controller
{
    // ...существующий код...

    public function actionIndex()
    {   
        $this->layout = 'one';
        $model = new Admin();
        
                          
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...
          
                        return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
           
        }
    }
     public function actionDelete()
    {  
    $this->layout = 'one';
    $request = Yii::$app->request;
    $resive = $request->post('Admin');
    $b = $resive['id'];
    
    
    if(isset($b)){
    
     return $this->render('delete', ['id'=> $b]); 
    }
 else {
       return $this->render('error', ['v' => 'Ошибка']); 
    }
    }
       public function actionList()
    {  
    $this->layout = 'one';
       
     return $this->render('list'); 
    
    }
        public function actionWrite()
    {  
    $this->layout = 'one';
       
   $request = Yii::$app->request;
    $resive = $request->post('Admin');
    return $this->render('write', ['resive'=> $resive]); 
   
    
    }
}
    
    
 
       
    