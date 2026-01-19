<?php
session_start();
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/MasterClass.php';
require 'model/Reviews.php';
require 'model/Register.php';

include_once 'view/masterclasses.php';
include_once 'view/reviews.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>