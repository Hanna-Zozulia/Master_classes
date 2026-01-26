<?php
class ViewMasterClasses {
    public static function MasterClassesByCategory($arr) {
        echo '<div class="top3-container">';
            foreach($arr as $value) {
                echo '<div class="top3-item">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=150 /><br>';
                echo "<h2>".$value['title']."</h2>";
                echo "<a href='masterclass?id=".$value['id']."'>Edasi</a><br>";
                echo '</div>';  
            }
        echo '</div>';
    }

    public static function MasterClasses($arr) {
        foreach ($arr as $value) {
            echo '
            <div class="swiper-slide">
                <a href="masterclass?id='.$value['id'].'" class="slide-card">
                    <img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'">
                </a>
            </div>
                ';
        }
    }

    public static function PopMasterClasses($pop) {
        foreach($pop as $p) {
            echo ' 
                <a href="masterclass?id='.$p['id'].'" class="masterclasses-card">
                    <img src="data:image/jpeg;base64,'.base64_encode($p['picture']).'" class="img-fluid">
                    <p class="title">'.$p['title'].'</p>
                    <p class="para">'.$p['format'].'</p>
                </a>
                ';
        }
    }

    public static function AllMasterClasses($arr) {
        echo '<ul class="master-list">';
        foreach($arr as $value) {
            echo '<li class="master-item">';
            echo '<a href="masterclass?id='.$value['id'].'" class="master-link">';
            echo $value['title'];
            echo '</a>';
            echo '</li>';
        }
        echo '</ul>';
}

    public static function ReadMasterClasses($n) {
        echo '<h2>'.$n['title'] .'</h2>
                <div class="master-page">
                    <div class="master-image">
                        <img src="data:image/jpeg;base64,'.base64_encode($n['picture']).'" alt="">
                    </div>

                    <div class="master-content">
                        <p class="description">'.$n['text'] .'</p>
                        <p class="price">Price: '.$n['price'].' €</p>
                        <p>Format: '.$n['format'].'</p>
                        <p class="date">Date: '.(new DateTime($n['date']))->format('d.m.Y H:i').'</p>
                    </div>
                </div>';
    }

    public static function ReviewsPop($rev) {
        foreach ($rev as $r) {
        echo '
            <div class="review-card">
                <p class="review-text">'.$r['text'].'</p>
                <p class="review-date">'.date('d.m.Y', strtotime($r['date'])).'</p>
            </div>
        ';
    }
}
}
?>