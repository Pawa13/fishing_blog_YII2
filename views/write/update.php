    <?php
use app\models\Aticls;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?> 

  <?php $form = ActiveForm::begin(['action'=> '/write/new']); ?>
  <p class="h5"> Название статьи: </p>
    <p><textarea name="Admin[Articl_name]">
        <?php 
        Aticls::Articl_name($id); 
        ?>
        </textarea></p>
          <input type="hidden" name="Admin[id]" value="<?php echo $id?>">
   
    <p class="h5"> Текст статьи: </p>
    <p><textarea class="colortext" rows="10" cols="45" name="Admin[Text]">
        <?php 
        Aticls::Add($id); 
        ?>
        </textarea></p>
          <input type="hidden" name="Admin[id]" value="<?php echo $id?>">
<br>
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>

