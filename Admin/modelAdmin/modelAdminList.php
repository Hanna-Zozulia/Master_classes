<?php
class modelAdminList {
    public static function getClassesList() {
        $query = "SELECT 
            masterclasses.*, 
            categories.name AS category_id, 
            users.name AS user_id
          FROM masterclasses
          JOIN categories ON masterclasses.category_id = categories.id
          JOIN users ON masterclasses.user_id = users.id
          ORDER BY masterclasses.id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getClassesAdd() {
        $test = false;
        if(isset($_POST['save'])) {
            if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) && isset($_POST['price']) && isset($_POST['format']) && isset($_POST['date'])) {
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $price = $_POST['price'];
                $format = $_POST['format'];
                $date = $_POST['date'];

                $image = addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));

                $sql = "INSERT INTO `masterclasses` (`id`, `title` , `text`, `picture`, `category_id`, `user_id`, `price`, `format`, `date`) VALUES (NULL, '$title', ' $text', '$image', '$idCategory', '1', '$price', '$format', '$date')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if($item == true) {
                    $test = true;
                }
            }
        }
        return $test;
    }

    public static function getClassesDetail($id) {
        $query = "SELECT masterclasses.*, categories.name, users.name FROM masterclasses, categories, users WHERE masterclasses.category_id=categories.id AND masterclasses.user_id= users.id AND masterclasses.id=".$id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $arr;
    }

    public static function getClassesEdit($id) {
        $test = false;
        if(isset($_POST['save'])) {
            if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) && isset($_POST['price']) && isset($_POST['format']) && isset($_POST['date'])) {
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $price = $_POST['price'];
                $format = $_POST['format'];
                $date = $_POST['date'];
                $image = $_FILES['picture']['name'];
                if($image != "") {
                    $image = addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));
                }

                if($image == "") {
                    $sql = "UPDATE `masterclasses` SET `title` = '$title', `text` = '$text', `category_id` = '$idCategory', `price` = '$price', `format` = '$format', `date` = '$date' WHERE `masterclasses`.`id` = ".$id;

                } else {
                    $sql = "UPDATE `masterclasses` SET `title` = '$title', `text` = '$text', `picture` = '$image', `category_id` = '$idCategory', `price` = '$price', `format` = '$format', `date` = '$date' WHERE `masterclasses`.`id` = ".$id;
                }

                $db = new Database();
                $item = $db->executeRun($sql);
                if($item == true) {
                    $test = true;
                }
            }
        }
        return $test;
    }

    public static function getClassesDelete($id) {
        $test = false;
        if (isset($_POST['save'])) {
            $sql = "DELETE FROM `masterclasses` WHERE `masterclasses`.`id` = ".$id;
            $db = new Database();
            $item = $db->executeRun($sql);
            if($item == true) {
                $test = true;
            }
        }
        return $test;
    }
}
