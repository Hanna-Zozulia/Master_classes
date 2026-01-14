<?php
session_start();
require_once '../inc/database.php';
include_once ("modelAdmin/modelAdmin.php");
include_once ("modelAdmin/modelAdminList.php");
include_once ("modelAdmin/modelAdminCategory.php");

include_once ("controllerAdmin/controllerAdmin.php");
include_once ("controllerAdmin/controllerAdminList.php");

include ('routerAdmin/routingAdmin.php');
echo $response;