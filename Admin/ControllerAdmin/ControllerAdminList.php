<?php

function checkAdminAuth() {
    // Check if the admin is logged in, if not, redirect to login page
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header('Location: /Admin/login'); // Assuming /Admin/login is the URL for the login page
        exit();
    }
}

class controllerAdminList {
    public static function ClassesList() {
        checkAdminAuth(); // Added authentication check
        $arr = modelAdminList::getClassesList();
            include_once 'viewAdmin/classesList.php';
    }

    public static function classesAddForm() {
        checkAdminAuth(); // Added authentication check
        $arr = modelAdminCategory::getCategoryList();
            include_once 'viewAdmin/classesAddForm.php';
    }

    public static function classesAddResult() {
        checkAdminAuth(); // Added authentication check
        $test = modelAdminList::getClassesAdd();
            include_once 'viewAdmin/classesAddForm.php';
    }

    public static function classesEditForm($id) {
        checkAdminAuth(); // Added authentication check
        $arr = modelAdminCategory::getCategoryList();
        $detail = modelAdminList::getClassesDetail($id);
        include_once('viewAdmin/classesEditForm.php');
    }

    public static function classesEditResult($id) {
        checkAdminAuth(); // Added authentication check
        $test = modelAdminList::getClassesEdit($id);
        include_once('viewAdmin/classesEditForm.php');
    }

    public static function classesDeleteForm($id) {
        checkAdminAuth(); // Added authentication check
        $arr = modelAdminCategory::getCategoryList();
        $detail = modelAdminList::getClassesDetail($id);
        include_once('viewAdmin/classesDeleteForm.php');
    }

    public static function classesDeleteResult($id) {
        checkAdminAuth(); // Added authentication check
        $test = modelAdminList::getClassesDelete($id);
        include_once('viewAdmin/classesDeleteForm.php');
    }
}
?>