<?php
require 'vendor/autoload.php' ;
$app = new \atk4\ui\App('success.php') ;
$app->initLayout('Centered') ;

$msg=$app->add(['Message','Поздравляю с регистрацией','type'=>'success','icon'=>'loading warning sign']) ;
