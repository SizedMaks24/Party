<?php


session_start();
require 'vendor/autoload.php';
/*require 'connection.php';
If((isset($_SESSION['hach'])) && ($_SESSION['hach']!='iqurhp23riuyfsfdugyozfixdbvkjn58946703jksdfg')) {
  header('Location: error.php');

}*/

$app = new \atk4\ui\App('Админка');
$app->initLayout('Centered');

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245;host=eu-mm-auto-fra-02-c.cleardb.net','bfa11752c77b7d','77c43c35') ;

Class Friends extends \atk4\data\Model {
  public $table ='maks' ;
  function init () {
parent::init() ;
  $this->addField('name') ;
  $this->addField('surname') ;
  $this->addField('phone_number',['default'=>'+371']) ;
  $this->addField('email') ;
  $this->addField('birthday',['type'=>'date']) ;
  $this->addField('notes',['type'=>'text']) ;
  $this->addField('age') ;
}
}

$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->menu->addItem('Reload',new \atk4\ui\jsReload($crud));

$button = $app->layout->add(['Button', 'Log out', 'purple']);
$button->link(['index']);

$button2 = $app->layout->add(['Button', 'Main', 'green']);
$button2->link(['index']);
