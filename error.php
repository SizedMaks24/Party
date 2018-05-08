<?php
require 'vendor/autoload.php' ;
$app = new \atk4\ui\App('ERROR.php') ;
$app->initLayout('Centered') ;

$msg=$app->add(['Message','подождите еще несколько лет','type'=>'error','icon'=>'loading warning sign']) ;
