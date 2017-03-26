<?php



// запрет прямого обращения
define('ISHOP', TRUE);

//підключення файлу конфігурації
require_once '../config.php';

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'pages' : $_GET['view'];


switch($view){
    case('pages'):
        //pages
        
    break;
    
      
    default:
        // если из адресной строки получено имя несуществующего вида
        $view = 'pages';
       
}

//header
include ADMIN_TEMPLATE.'header.php';

//leftbar
include ADMIN_TEMPLATE.'leftbar.php';
//content
include ADMIN_TEMPLATE.$view.'.php';        

?>



