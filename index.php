
<?php
require 'vendor/autoload.php' ;
require 'app.php' ;


$app = new App('public') ;


/*$button1 = $app ->add ('Button') ;
$button1->set('Atleticon Madrid') ;
$button1->addClass('massive red') ;
$button1->link('http://en.atleticodemadrid.com/') ;
$button1->icon = 'plus' ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan') ;

 $a = 0 ;

if ($a != 0) {
  $name = 'Верно!' ;
}else{
  $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$label = $app->add(['Label','Last Games']) ;

$img2 = 'https://www.apuestas-deportivas.com/wp-content/uploads/2017/10/Qarabag-v-Atlético-Madrid.jpg';
$icon2 = $app ->add(['Image', $img2 ]) ;

$a = 0 ;

if ($a == 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 4 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = -3 ;

if ($a > -8) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 8 ;

if ($a >= 9) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 12 ;

if ($a <= 10) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 0 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 'test' ;

if ($a == 'test') {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$text=app->add(['Text','Push Delete Your Brains']) ;
$button=$app->layout->add(['Button','Delete Your Brains']) ;
$button->link(['Test',]) ;
$button->addClass(['Big ornge']) ;*/

/*$cat1 = new Cat ;
$cat1->name='Dzujsa';
$cat1->sex='Girl';
$cat1->colour='Green';
$cat1->age='8';

$cat2 = new Cat ;
$cat2->name='Fashist';
$cat2->sex='Boy';
$cat2->colour='Pink';
$cat2->age='16';

$cat3 = new Cat ;
$cat3->name='King Arthur';
$cat3->sex='Boy';
$cat3->colour='Black';
$cat3->age='12';

$cat4 = new Cat ;
$cat4->name='Stalin';
$cat4->sex='Boy';
$cat4->colour='White';
$cat4->age='119';
$cat4->AgeCheck() ;
$label=$app->add(['Label',$cat4->name.'  '.$answer */

/*$Adidas1 = new Boots ;
$Adidas1->name = 'Ace 17 + PureControl' ;
$Adidas1->colour = 'Red' ;
$Adidas1->price = '$450' ;
$label1 = $app->add(['Label',$Adidas1->name,$Adidas1->colour]);

$Adidas2 = new Boots ;
$Adidas2->name = 'Ace 16.3 Primesh' ;
$Adidas2->colour = 'White' ;
$Adidas2->price = '$80' ;
$label2 = $app->add(['Label',$Adidas2->name,$Adidas2->colour]);

$Adidas3 = new Boots ;
$Adidas3->name = 'X PureChaous' ;
$Adidas3->colour = 'Green' ;
$Adidas3->price = '$250' ;
$label3 = $app->add(['Label',$Adidas3->name,$Adidas3->colour]);

$Adidas4 = new Boots ;
$Adidas4->name = 'Primeknit' ;
$Adidas4->colour = 'Blue' ;
$Adidas4->price = '$125' ;
$label4 = $app->add(['Label',$Adidas4->name,$Adidas4->colour]);*/

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','') ;
Class Friends extends \atk4\data\Model {
  public $table ='friends' ;
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


$form = $app->layout->add('Form') ;
$form ->setModel(new Friends($db));

$form->onSubmit(function($form){
  If($form->model['age']>14) {
    $form->model->save() ;
	 $notifier = new \atk4\ui\jsNotify();
	  $notifier->setColor('pink')
	  ->setPosition('bottomLeft')
	  ->setWidth('25')
	  ->setContent('Mi tancuem pod minimal da da da')
	  ->setIcon(' wheelchair ' )
	  ->setTransition('flash') ;

    return $notifier;
  }else{
    //return $form->error('age','Sorry') ;
    return new \atk4\ui\jsExpression('document.location="error.php"') ;
  }
}) ;
$button1 = $app ->add ('Button') ;
$button1->link('admin.php') ;
$button1->set('Admin') ;

$grid = $app->layout->add('Grid') ;
$grid->setModel(new Friends($db)) ;
$crud =$app->layout->add('CRUD') ;
$crud->setModel(new Friends($db)) ;
/*
$menu = $app->add('menu') ;
$menu->addItem('phone','https://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note-8-sm-n950.jpg');
$phone=$menu->addMenu('samsung') ;
$phone->addItem('Galaxy S8','https://www.vodafone.co.uk/cs/groups/public/documents/webcontent/vfcon079860.jpg') ;
$phone->addItem('Note 8','https://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note-8-sm-n950.jpg') ;
$phone->addItem('Samsung S8+','https://cnet2.cbsistatic.com/img/Gf4Ksbiewu79cMcdLZCrnnA8PFw=/770x433/2017/03/29/668be2fe-e1c3-451c-a7e5-e40a15291fe0/samsung-galaxy-s8-010.jpg') ;
$phone->addItem('Samsung A8 2018','http://st1.bgr.in/wp-content/uploads/2017/12/Samsung-Galaxy-A8-2018-cover.jpg') ;


$tabs = $app ->add('Tabs') ;
$electronic = $tabs->addTab('Electronic');
$image = $electronic->add(['image', 'https://www.vodafone.co.uk/cs/groups/public/documents/webcontent/vfcon079860.jpg']) ;

$cars = $tabs->addItem('Cars') ;
$image = $cars->add(['image','https://pictures.topspeed.com/IMG/crop/201707/this-one-off-lamborg-6_1600x0w.jpg']) ;

=======
<?php
require 'vendor/autoload.php' ;


$app = new \atk4\ui\App('Please Register in Data Base') ;
$app->initLayout('Centered') ;

/*$button1 = $app ->add ('Button') ;
$button1->set('Atleticon Madrid') ;
$button1->addClass('massive red') ;
$button1->link('http://en.atleticodemadrid.com/') ;
$button1->icon = 'plus' ;

$img = 'http://2.bp.blogspot.com/-HWgpuULTHMc/UZnitEtOKwI/AAAAAAAAAOo/YZcxUkgFGps/s1600/Atletico+Madrid+FC+New+HD+Wallpaper+2013-2014.jpg';
$icon = $app ->add(['Image', $img ]) ;

$text =$app ->add(['Text','Força Atletico Madrid']) ;
$text->addParagraph('Fan') ;

 $a = 0 ;

if ($a != 0) {
  $name = 'Верно!' ;
}else{
  $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$label = $app->add(['Label','Last Games']) ;

$img2 = 'https://www.apuestas-deportivas.com/wp-content/uploads/2017/10/Qarabag-v-Atlético-Madrid.jpg';
$icon2 = $app ->add(['Image', $img2 ]) ;

$a = 0 ;

if ($a == 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 4 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = -3 ;

if ($a > -8) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 8 ;

if ($a >= 9) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 12 ;

if ($a <= 10) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 0 ;

if ($a != 0) {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$a = 'test' ;

if ($a == 'test') {
 $name = 'Верно!' ;
}else{
 $name = 'Неверно!' ;
}

$label = $app->add(['Label',$name]) ;

$text=app->add(['Text','Push Delete Your Brains']) ;
$button=$app->layout->add(['Button','Delete Your Brains']) ;
$button->link(['Test',]) ;
$button->addClass(['Big ornge']) ;*/

/*$cat1 = new Cat ;
$cat1->name='Dzujsa';
$cat1->sex='Girl';
$cat1->colour='Green';
$cat1->age='8';

$cat2 = new Cat ;
$cat2->name='Fashist';
$cat2->sex='Boy';
$cat2->colour='Pink';
$cat2->age='16';

$cat3 = new Cat ;
$cat3->name='King Arthur';
$cat3->sex='Boy';
$cat3->colour='Black';
$cat3->age='12';

$cat4 = new Cat ;
$cat4->name='Stalin';
$cat4->sex='Boy';
$cat4->colour='White';
$cat4->age='119';
$cat4->AgeCheck() ;
$label=$app->add(['Label',$cat4->name.'  '.$answer */

/*$Adidas1 = new Boots ;
$Adidas1->name = 'Ace 17 + PureControl' ;
$Adidas1->colour = 'Red' ;
$Adidas1->price = '$450' ;
$label1 = $app->add(['Label',$Adidas1->name,$Adidas1->colour]);

$Adidas2 = new Boots ;
$Adidas2->name = 'Ace 16.3 Primesh' ;
$Adidas2->colour = 'White' ;
$Adidas2->price = '$80' ;
$label2 = $app->add(['Label',$Adidas2->name,$Adidas2->colour]);

$Adidas3 = new Boots ;
$Adidas3->name = 'X PureChaous' ;
$Adidas3->colour = 'Green' ;
$Adidas3->price = '$250' ;
$label3 = $app->add(['Label',$Adidas3->name,$Adidas3->colour]);

$Adidas4 = new Boots ;
$Adidas4->name = 'Primeknit' ;
$Adidas4->colour = 'Blue' ;
$Adidas4->price = '$125' ;
$label4 = $app->add(['Label',$Adidas4->name,$Adidas4->colour]);

$db = new
\atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','') ;
Class Friends extends \atk4\data\Model {
  public $table ='friends' ;
  function init () {
parent::init() ;
  $this->addField('name') ;
  $this->addField('surname') ;
  $this->addField('phone_number',['default'=>'+371']) ;
  $this->addField('email') ;
  $this->addField('birthday',['type'=>'date']) ;
  $this->addField('notes',['type'=>'text']) ;
}
}


$form = $app->layout->add('Form') ;
$form ->setModel(new Friends($db));

$form->onSubmit(function($form){
$form->model->save();
return $form->success('Record updated') ;
}) ;
$grid = $app->layout->add('Grid') ;
$grid->setModel(new Friends($db)) ;
$crud =$app->layout->add('CRUD') ;
$crud->setModel(new Friends($db)) ;
>>>>>>> aeb8d9ec0c148147a043e4967e2581059161a526
*/
