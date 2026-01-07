<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();

} elseif ($path == 'all') {
    $response = Controller::AllMasterClasses();

} elseif ($path == 'category' and isset($_GET['id'])) {
    $response = Controller::MasterClassesByCatID($_GET['id']);

} elseif ($path == 'masterclass' and isset($_GET['id'])) {
    $response = Controller::MasterClassesByID($_GET['id']);

} else {
    $response = Controller::error404();
}
?>