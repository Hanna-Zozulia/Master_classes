<?php
class Controller {
    public static function StartSite() {
        $arr = MasterClasses::getAllMasterClasses();
        include_once 'view/start.php';
    }

    public static function Top() {
        $arr = MasterClasses::getMasterClasses();
        include_once 'view/top.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllMasterClasses() {
        $arr = MasterClasses::getAllMasterClasses();
        include_once 'view/allmasterclasses.php';
    }

    public static function MasterClassesByCatID($id) {
        $arr = MasterClasses::getMasterClassesByCategoryID($id);
        $cat = Category::getAllCategory();
        include_once 'view/catmasterclasses.php';
    }

    public static function MasterClassesByID($id) {
        $n = MasterClasses::getMasterClassesByID($id);
        include_once 'view/readmasterclasses.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function InsertReview($c, $id) {
        Reviews::InsertReview ($c, $id);
        header('Location:masterclass?id='.$id.'#ctable');
    }

    public static function Reviews ($newsid) {
        $arr = Reviews::getReviewsByClassesID($newsid);
        ViewReviews::ReviewsByClasses($arr);
    }

    public static function ReviewsCount($newsid) {
        $arr = Reviews::getReviewsCountByClassesID($newsid);
        ViewReviews::ReviewsCount($arr);
    }

    public static function ReviewsCountWithAncor ($newsid) {
        $arr = Reviews::getReviewsCountByClassesID($newsid);
        ViewReviews::ReviewsCountWithAncor($arr);
    }

    public static function registerForm() {
        include_once('view/formRegister.php');
    }

    public static function registerUser() {
        $result = Register::registerUser();
        include_once('view/answerRegister.php');
    }
}