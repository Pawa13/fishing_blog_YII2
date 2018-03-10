<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() // подключает бутстрап?> 
</head>
<body>
    <?php $this->beginBody() // подключает бутстрап?>
	<div>
            <header>
		 <img class="headerimg" src="../img/header2.png"> 
                          
            </header>
            <div class="menu">
                                <ul class="menu-main">
 				<li><a href="/">Главная</a></li>
 				<li><a href="/feeder">Фидер</a></li>
 				<li><a href="/spinning">Спиннинг</a></li>
  				<li><a href="/admin">Администратору</a></li>
                </ul>
        
            </div>
                <div id="main">
                    
                               <?php echo $content ?>  
                </div>
                
            <footer>
                  Разнообразный и богатый опыт консультация с широким активом позволяет выполнять важные задания по разработке дальнейших направлений развития.
            </footer>
	</div>
</body>
	</html>

  <?php $this->endBody() ?>
</body>
	</html>
        <?php $this->endPage() ?>





      