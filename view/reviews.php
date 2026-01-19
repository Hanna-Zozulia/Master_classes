<?php
class ViewReviews {
    public static function ReviewsForm() {
        echo '<form action="insertreview">
                <input type="hidden" name="id" value="'.$_GET['id'].'">
                Your review: <input type="text" name="review">
                <input type="submit" value="Send">
            </form>';
    }

    public static function ReviewsByClasses($arr) {
        if($arr!=null) {
            echo '<table id="ctable"><th>Review</th><th>Date</th>';
            foreach($arr as $value) {
                echo '<tr><td>'.$value['text']."</td><td>".$value['date']."</td></tr>";
            }
            echo '</table>';
        }
    }

    public static function ReviewsCountWithAncor($value) {
        if ($value['count']>0)
            echo '<b><a href="#ctable"/>('.$value['count'].')</a></b>';
    }

    public static function ReviewsCount($value) {
        if ($value['count']>0) {
            echo '<b><font color="red">('.$value['count'].')</font></b>';
        }
    }
}