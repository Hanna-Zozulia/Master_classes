<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if ($path == '' OR $path == 'index.php') {
    $response = controllerAdmin::formLoginSite();

} elseif ($path == 'login') {
    $response = controllerAdmin::loginAction();

} elseif ($path == 'logout') {
    $response = controllerAdmin::logoutAction();

} elseif ($path == 'masterclassesAdmin') {
    $response = controllerAdminList::ClassesList();

} elseif ($path == 'masterclassesAdd') {
    $response = controllerAdminList::classesAddForm();

} elseif ($path == 'masterclassesAddResult') {
    $response = controllerAdminList::classesAddResult();

} elseif ($path == 'masterclassesEdit' && isset($_GET['id'])) {
    $response = controllerAdminList::classesEditForm($_GET['id']);

} elseif ($path == 'masterclassesEditResult' && isset($_GET['id']))  {
    $response = controllerAdminList::classesEditResult($_GET['id']);

} else {
    $response = controllerAdmin::error404();
}