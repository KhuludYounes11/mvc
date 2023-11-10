<?php
use app\controllers\UserController;
use app\models\UserModel;
require_once __DIR__ ."/lib/db/MysqliDb.php";
require_once __DIR__ ."/app/controllers/UserController.php";
require_once __DIR__ ."/app/model/UserModel.php";
require_once __DIR__ ."/config/config.php";

define('BASE_PATH',"/darbnee/mvc/");
$config= require "config/config.php";
$db=new MysqliDb (
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
$request=$_SERVER['REQUEST_URI'];
var_dump($request);
$model=new UserModel($db);
$controller=new UserController($model);
switch ($request) {
  case BASE_PATH:
    $controller->index();
      break;
      case BASE_PATH.'add':
     $controller->adduser();
          break;
          case BASE_PATH."update?id=".$_GET['id']:
            $id=$_GET['id'];
            $controller->updateuser($id);
                 break;
                 case BASE_PATH."delete?id=".$_GET['id']:
                  $id=$_GET['id'];
                  $controller->deleteuser($id);
                       break;
  default:
   echo "no action";
      break;
}

?>