<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p align ="center">!!! РЕЖИМ АДМИНИСТРИРОВАНИЯ !!!</p>
<script type="text/javascript">
$(document).ready(function(){
$('.spoiler-body').hide();
$('.spoiler-title').click(function(){
    $(this).next().toggle()});
});
</script>
<b class="spoiler-title btn btn-success">Список статей</b>
<div class="spoiler-body">
     <?php $form = ActiveForm::begin(['action'=> '/admin/list']); ?>
    <br>
    <p> Получить список всех статей? </p>
    <br>
   <?= Html::submitButton('Получить', ['class' => 'btn btn-primary']) ?>
    <br>
        <?php ActiveForm::end(); ?>
</div>
<br>
<br>
<b class="spoiler-title btn btn-success">Добавить статью</b>
<div class="spoiler-body">
     <?php $form = ActiveForm::begin(['action'=> '/write']); ?>
    <p class="h5"> Выберите категорию </p> 
    <input type="radio" name="Admin[Categories]" value="feeder"> Фидер <br>
    <input type="radio" name="Admin[Categories]" value="spinning"> Спиннинг <br>
     <p class="h5"> Название статьи: </p>
    <input type="text" class="colortext" name="Admin[Articl_name]"><br>
    <p class="h5"> Текст статьи: </p>
    <p><textarea class="colortext" rows="10" cols="45" name="Admin[Text]"></textarea></p>
    <br>
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>
</div>
<br>
<br>
<b class="spoiler-title btn btn-success">Удалить статью по ID</b>
<div class="spoiler-body">
    <?php $form = ActiveForm::begin(['action'=> '/write/delete']); ?>
    <br>
    <p class="h5"> Введите ID статьи </p> 
    <input type="text" class="colortext" name="Admin[Id]"><br>
        <br>
        <?= Html::submitButton('Удалить', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>
   
</div>
<br>
<br>
<b class="spoiler-title btn btn-success">Редактировать статью</b>
<div class="spoiler-body">
    <?php $form = ActiveForm::begin(['action'=> '/write/update']); ?>
    <br>
    <p class="h5"> Введите ID статьи </p>
    <input type="text" class="colortext" name="Admin[Id]"><br>
        <br>
        <?= Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>
</div>