<?php
class ViewReviews {
    public static function ReviewsForm() {
            echo '<form action="insertreview" class="review-form">
                <input type="hidden" name="id" value="'.$_GET['id'].'">

                <label for="review">Your review of the master class:</label>
                <textarea name="review" rows="5" placeholder="Write your review here..." required></textarea>

                <button type="submit">Send</button>
            </form>';
    }

    public static function ReviewsByClasses($arr) {
        if($arr!=null) {
            echo '<div class="reviews-grid">';
            foreach($arr as $value) {
                echo '<div class="review-card">
                <p class="review-text">'.$value['text'].'</p>
                <p class="review-date">'.date('d.m.Y', strtotime($value['date'])).'</p>
            </div>';
            }
            echo '</div>';
         } else {
        echo '<p>No reviews yet.</p>';
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