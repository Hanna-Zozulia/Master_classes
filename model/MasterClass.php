<?php
class MasterClasses {
    public static function getMasterClasses() {
        $query = "SELECT * FROM masterclasses ORDER BY id DESC LIMIT 3;";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllMasterClasses() {
        $query = "SELECT * FROM `masterclasses` ORDER BY id DESC;";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getPopMasterClasses() {
        $query = "SELECT * FROM masterclasses ORDER BY id DESC LIMIT 6";
        $db = new Database();
        $pop = $db->getAll($query);
        return $pop;
    }

    public static function getMasterClassesByCategoryID($id) {
        $query = "SELECT * FROM `masterclasses` WHERE category_id=".(string)$id." ORDER BY id DESC;";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getMasterClassesByID($id) {
        $query = "SELECT * FROM masterclasses WHERE id=".(string)$id;
        $db = new Database();
        $n = $db->getOne($query);
        return $n;
    }
}
?>