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
}
// INSERT INTO `masterclass` (`id`, `title` , `text`, `picture`, `category_id`, `user_id`, `price`, `format`, `date`) VALUES (NULL, '1111111111', ' 111111111', NULL, '1', '1', '10', 'online', '2024-12-12')