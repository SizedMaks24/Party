<?php
session_start();
require 'vendor/autoload.php';
require 'app.php';

$app = new App('public');
/*$app = new \atk4\ui\App('You WIN!!!');
$app->initLayout('Centered'); */

/*$button = $app->add('Button');
$button->set('My chess site');
$button->addClass('massive grey');
$button->icon = 'delicious';
$button->link ('http://deniskariga.wixsite.com/chess-lessons-free');
$button = $app->add('Button');
$button->set('Registration');
$button->addClass('big yellow');
$button->icon = 'add user';
$button->link ('https://www.e-klase.lv');
$button = $app->add('Button');
$button->set('Follower');
$button->addClass('large violet');
$button->icon = 'plus';
$button->link ('https://www.youtube.com');
$button = $app->add('Button');
$button->set('Android site');
$button->addClass('large green');
$button->icon = 'android';
$button->link ('https://www.android.com');
$button = $app->add('Button');
$button->set('My web site');
$button->addClass('large purple');
$button->icon = 'browser';
$button->link ('http://mysecondwork.herokuapp.com');
$button=$app->add(['Button','New','medium teal','iconRight'=>'right arrow',]);
$label = $app->add(['Label', 'Book','medium red','icon'=>'book']);
$label = $app->add(['Label', 'Book','medium red','image'=>'http://greetingbooks.com/wp-content/uploads/2015/08/3.png']);
$text = $app->add(['Text', 'My book...']);
$a=0;
if ($a!=0) {
  $name = 'Верно!';
  $pref = 'massive blue';
  $img = 'https://st.depositphotos.com/2931363/4881/i/950/depositphotos_48814037-stock-photo-happy-man-in-shirt-talking.jpg';
} else {
  $name = 'Неверно!';
  $pref = 'small black';
  $img = 'https://st2.depositphotos.com/1115531/5548/i/950/depositphotos_55488945-stock-photo-portrait-one-sad-man-standing.jpg';
}
$label = $app->add(['Label', $name, $pref]);
$image = $app->add(['Image', $img]);*/
/*$button = $app->layout->add(['Button','LINK TO THE FIRST FILE']);
$button->link(['text', 'name'=>'Denis', 'surname'=>'Kornienko']);

$button1 = $app->layout->add(['Button', '1']);
$button1->link(['text', 'number'=>'1']);

$button2 = $app->layout->add(['Button', '2']);
$button2->link(['text', 'number'=>'2']);

$button3 = $app->layout->add(['Button', '3']);
$button3->link(['text', 'number'=>'3']);

$text = $app->add(['Text', 'Hello noob! Click on the button!!! Faster!!!']);
$button = $app->layout->add(['Button', 'Start!', 'large purple']);
$button->link(['game', 'min'=>1, 'max'=>100]);

$cat1 = new Cat;
$cat1->name='Pups';
$cat1->sex='Boy';
$cat1->age='8';
$cat1->color='Grey';
$label1 = $app->add(['Label', $cat1->name.' '.($cat1->AgeCheck()),'image'=>'http://doskapozorakomi.ru/uploads/posts/2015-07/1437468703_image.jpg']);

$cat2 = new Cat;
$cat2->name='Sestra';
$cat2->sex='Girl';
$cat2->age='4';
$cat2->color='Pink';
$label2 = $app->add(['Label', $cat2->name.' '.($cat2->AgeCheck()),  'image'=>'http://club-pets.com/profile/obj/1039/board/1449/1449-4646b.jpg']);

$cat3 = new Cat;
$cat3->name='Attacker';
$cat3->sex='Boy';
$cat3->age='13';
$cat3->color='Red';
$label3 = $app->add(['Label', $cat3->name.' '.($cat3->AgeCheck()), 'image'=>'http://www.happy-bears.org/gallery/expos/Happy%20Bears%20Axel%20Golden%20Boy.%20Chisinau%2013-04-2013_669_ny11_62348.jpg']);

$button1 = $app->layout->add(['Button', '1kg']);
$button1->link(['index','weight'=>'1']);

$button2 = $app->layout->add(['Button', '2kg']);
$button2->link(['index','weight'=>'2']);

$button3 = $app->layout->add(['Button', '3kg']);
$button3->link(['index','weight'=>'3']);

$button4 = $app->layout->add(['Button', '4kg']);
$button4->link(['index','weight'=>'4']);

$button5 = $app->layout->add(['Button', '5kg']);
$button5->link(['index','weight'=>'5']);

$weight = $_GET['weight'];

$laima1 = new Laima;
$laima1->name='Vaverīte';
$laima1->price=7;
$laima1->color='green';
$total = $laima1->AllPrice($weight);
$label1 = $app->add(['Label', $laima1->name.' '. $total, $laima1->color.' massive', 'detail'=>'Cena par kg '. $laima1->price, 'image'=>'http://www.laima.lv/wp-content/uploads/2016/05/4750001311662_V-VER-TE-2kg-konf-300x191.jpg']);

$laima2 = new Laima;
$laima2->name='Lukss';
$laima2->price=9;
$laima2->color='red';
$total = $laima2->AllPrice($weight);
$label2 = $app->add(['Label', $laima2->name.' '. $total, $laima2->color.' massive', 'detail'=>'Cena par kg '. $laima2->price, 'image'=>'https://nuko.lv/media/catalog/product/cache/1/image/480x740/9df78eab33525d08d6e5fb8d27136e95/0/0/00855201.jpg']);

$laima3 = new Laima;
$laima3->name='Lacīši';
$laima3->price=5;
$laima3->color='teal';
$total = $laima3->AllPrice($weight);
$label3 = $app->add(['Label', $laima3->name.' '. $total, $laima3->color.' massive', 'detail'=>'Cena par kg '. $laima3->price, 'image'=>'http://www.ekspobirojs.lv/Attachment/NomPicture/18224_1000x1000.jpg']);

$laima4 = new Laima;
$laima4->name='Serenāde';
$laima4->price=8;
$laima4->color='blue';
$total = $laima4->AllPrice($weight);
$label4 = $app->add(['Label', $laima4->name.' '. $total, $laima4->color.' massive', 'detail'=>'Cena par kg '. $laima4->price, 'image'=>'https://www.birojs.lv/global/uploads/images/products/8-02-003.bg.jpg']);*/

  If(isset($_SESSION['name'])) {
    $text=$app->add(['Text', $_SESSION['name']]);
  }

$button = $app->add(['Button', 'Info', 'blue']);
$button->link(['info']);

$button2 = $app->layout->add(['Button', 'Admin', 'purple']);
$button2->link(['check']);

$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function($form) {
  $_SESSION['name']=$form->model['name'];
  If($form->model['age']>14) {
  $form->model->save();
/*  $notifier = new \atk4\ui\jsNotify();
  $notifier->setColor('purple')
           ->setPosition('topLeft')
           ->setWidth('50')
           ->setContent('Hahah! There is an error!!!')
           ->setTransition('bounce')
           ->setIcon('smile outline');*/

  return /*$notifier;*/new \atk4\ui\jsExpression('document.location = "success.php"');

} else {
  return new \atk4\ui\jsExpression('document.location = "error.php"');
}


});
$grid=$app->layout->add('Grid');
$grid->setModel(new Friends($db));
$grid->addQuickSearch(['name', 'surname']);

/*$menu=$app->add('Menu');
$clothes=$menu->addMenu('Clothes');

$shirts=$clothes->addMenu('Shirts');
$shirts->addItem('Expensive shirt','https://img1.wbstatic.net/c246x328/new/4340000/4349315-1.jpg');
$shirts->addItem('Cheap shirt','http://eravera.ru/joyojufoy/1152-1608.jpg');
$clothes->addItem('Shoes','https://www.nordman.ru/media/attachment/files/33921b2701e34c2a81fc49e1ca4fcd76.jpg');
$clothes->addItem('Pants','http://www.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw81e6aac0/images/hi-res/21190_BLK.jpg?sw=750&sh=750&sm=fit&sfrm=png');
$clothes->addItem('Hats','https://www.villagehatshop.com/photos/product/standard/4511390S61504/all/pinch-crown-crushable-wool-felt-fedora-hat.jpg');
$clothes->addItem('Gloves','https://images.sportsdirect.com/images/products/90735603_l.jpg');
$electronics=$menu->addMenu('Electronics');
$electronics->addItem('Phone','https://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/Category_400x400/IP8P256SG_.jpg');
$computers=$electronics->addMenu('Computer');
$computers->addItem('Computer','https://i5.walmartimages.com/asr/f1bc87e9-b212-4151-93a6-934ef893df10_1.e725815270b54a590118e10126b1f938.png');
$computers->addItem('Power Supply','https://images-na.ssl-images-amazon.com/images/I/41vChr%2B1rgL._SX355_.jpg');
$computers->addItem('Case','https://images-eu.ssl-images-amazon.com/images/I/51yzw5aKstL._SL500_AC_SS350_.jpg');
$computers->addItem('CPU','https://www.extremetech.com/wp-content/uploads/2017/07/543318-intel-core-i9-x-series-640x360.jpg');
$computers->addItem('CPU Cooler','https://images-na.ssl-images-amazon.com/images/I/91UNx7QSvpL._SL1500_.jpg');
$computers->addItem('Ram','https://images-na.ssl-images-amazon.com/images/I/51TqsqpQGKL._SY355_.jpg');
$computers->addItem('HDD','https://images-na.ssl-images-amazon.com/images/I/41WACosHL3L._SL500_AC_SS350_.jpg');
$computers->addItem('SSD','https://www.scan.co.uk/images/products/2904568-a.jpg');
$computers->addItem('GPU','https://images-na.ssl-images-amazon.com/images/I/71dryX5bUuL._SX355_.jpg');
$computers->addItem('Motherboard','https://images.novatech.co.uk/msi-h110m_pro-vd_plus.jpg');
$computers->addItem('Modem','https://i.ebayimg.com/images/g/rOwAAOSwg9JZ00Tq/s-l300.jpg');
$computers->addItem('Drive','https://cdn1.techadvisor.co.uk/cmsdata/features/3500581/Install-software-on-a-second-hard-drive_thumb800.jpg');
$computers->addItem('Sound card','https://images-na.ssl-images-amazon.com/images/I/71dZ6r8TdNL._SX355_.jpg');
$computers->addItem('Cables','http://www.dfliq.net/wp-content/uploads/2016/08/Underground-Cables.jpg');
$electronics->addItem('Mp3 player','https://static.energysistem.com/energysistem/images/productos/42647/1_.V1488794250._.jpg');
$electronics->addItem('Calculator','https://images-na.ssl-images-amazon.com/images/I/415e3F7bPvL._SL500_AC_SS350_.jpg');
$electronics->addItem('Speaker','https://assets.logitech.com/assets/64801/4/speaker-system-z130.png');
$toys=$menu->addMenu('Toys');
$toys->addItem('Toy car','https://images-na.ssl-images-amazon.com/images/I/41WftNAdSaL._SY355_.jpg');
$toys->addItem('Toy phone','https://images-na.ssl-images-amazon.com/images/I/51Sl0pZNHHL.jpg');
$toys->addItem('Toy kitchen','https://secure.img2-fg.wfcdn.com/im/03305875/resize-h800%5Ecompr-r85/1320/13208352/My+Very+Own+Wooden+Play+Kitchen.jpg');
$toys->addItem('Toy cubes','https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX6401737.jpg');
$toys->addItem('Toy house','https://images-na.ssl-images-amazon.com/images/I/51KmO5S13iL._SX300_.jpg');


$tabs=$app->add('Tabs');
$clothes=$tabs->addTab('Clothes');
$image=$clothes->add(['Image','http://www.fainaidea.com/wp-content/uploads/2017/12/s0575149fdb16d9.jpg']);
$image=$clothes->add(['Image','https://i.ytimg.com/vi/EJCxX4xcdxE/maxresdefault.jpg']);
$image=$clothes->add(['Image','http://xypd.net/wp-content/uploads/2011/06/nabor_base.jpg']);
$electronics=$tabs->addTab('Electronics');
$image=$electronics->add(['Image','https://abitur.bsuir.by/m/12_113227_1_53126.jpg']);
$image=$electronics->add(['Image','https://hsto.org/files/a07/e59/e9b/a07e59e9b4b748b3909ba75fb3f1345d.JPG']);
$image=$electronics->add(['Image','https://arduino-ua.com/products_pictures/large_KIT006-5.jpg']);
$toys=$tabs->addTab('Toys');
$image=$toys->add(['Image','https://vistanews.ru/uploads/posts/2017-02/1487504889_kupit-magkie-igrushki-optom.jpg']);
$image=$toys->add(['Image','http://www.optom1.ru/admin/uploads/image/919219.jpg']);
$image=$toys->add(['Image','http://greenword.ru/images/2014/07/img_53cb8dee20c79.jpg']);*/
