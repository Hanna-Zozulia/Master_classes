<?php
    class Reviews {
        public static function InsertReview($c, $id) {
            $query = "INSERT INTO `reviews` (`id`, `masterclasses_id`, `text`, `date`) VALUES (NULL, '".$id."', '".$c."', CURRENT_TIMESTAMP)";
            $db = new database();
            $q = $db->executeRun($query);
            return $q;
        }

        public static function getReviewsByClassesID($id) {
            $query = "SELECT * FROM reviews WHERE masterclasses_id=".(string)$id." ORDER BY id DESC";
            $db = new Database();
            $arr = $db->getAll($query);
            return $arr;
        }

        public static function getReviewsCountByClassesID($id) {
            $query = "SELECT count(id) as 'count' FROM reviews WHERE masterclasses_id=".(string)$id;
            $db = new Database();
            $c = $db->getOne($query);
            return $c;
        }
    }