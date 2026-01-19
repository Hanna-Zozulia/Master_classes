<?php
class modelAdminList {
    public static function getClassesList() {
        $query = "SELECT 
            masterclass.*, 
            categories.name AS category_id, 
            users.name AS user_id
          FROM masterclass
          JOIN categories ON masterclass.category_id = categories.id
          JOIN users ON masterclass.user_id = users.id
          ORDER BY masterclass.id DESC";
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

                $sql = "INSERT INTO `masterclass` (`id`, `title` , `text`, `picture`, `category_id`, `user_id`, `price`, `format`, `date`) VALUES (NULL, '$title', ' $text', '$image', '$idCategory', '1', '$price', '$format', '$date')";
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
        $query = "SELECT masterclass.*, categories.name, users.name FROM masterclass, categories, users WHERE masterclass.category_id=categories.id AND masterclass.user_id= users.id AND masterclass.id=".$id;
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
                    $sql = "UPDATE `masterclass` SET `title` = '$title', `text` = '$text', `category_id` = '$idCategory', `price` = '$price', `format` = '$format', `date` = '$date' WHERE `masterclass`.`id` = ".$id;

                } else {
                    $sql = "UPDATE `masterclass` SET `title` = '$title', `text` = '$text', `picture` = '$image', `category_id` = '$idCategory', `price` = '$price', `format` = '$format', `date` = '$date' WHERE `masterclass`.`id` = ".$id;
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
            $sql = "DELETE FROM `masterclass` WHERE `masterclass`.`id` = ".$id;
            $db = new Database();
            $item = $db->executeRun($sql);
            if($item == true) {
                $test = true;
            }
        }
        return $test;
    }
}
