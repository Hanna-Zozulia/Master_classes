<?php 
class controllerAdminList {
    public static function ClassesList() {
        $arr = modelAdminList::getClassesList();
            include_once 'viewAdmin/classesList.php';
    }

    public static function classesAddForm() {
        $arr = modelAdminCategory::getCategoryList();
            include_once 'viewAdmin/classesAddForm.php';
    }

    public static function classesAddResult() {
        $test = modelAdminList::getClassesAdd();
            include_once 'viewAdmin/classesAddForm.php';
    }

    public static function classesEditForm($id) {
        $arr = modelAdminCategory::getCategoryList();
        $detail = modelAdminList::getClassesDetail($id);
        include_once('viewAdmin/classesEditForm.php');
    }

    public static function classesEditResult($id) {
        $test = modelAdminList::getClassesEdit($id);
        include_once('viewAdmin/classesEditForm.php');
    }

}
?>