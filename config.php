<?php

defined('ISHOP') or die('Access denied');

// домен
define('PATH', 'http://ishop/');

// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEW', 'views/');

// папка с активным шаблоном
define('TEMPLATE', VIEW.'ishop/');

// папка с картинками контента
define('PRODUCTIMG', PATH.'userfiles/');

// сервер БД
define('HOST', 'localhost');

// пользователь
define('USER', 'ishop_user');

// пароль
define('PASS', '123');

// БД
define('DB', 'ishop');

// название магазина - title
define('TITLE', 'Интернет магазин сотовых телефонов');

// email администратора
define('ADMIN_EMAIL', 'admin@ishop.com');

// количество товаров на страницу
define('PERPAGE', 9);

mysql_connect(HOST, USER, PASS) or die('No connect to Server');
mysql_select_db(DB) or die('No connect to DB');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');