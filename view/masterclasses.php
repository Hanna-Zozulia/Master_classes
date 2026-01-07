<?php
class ViewMasterClasses {
    public static function MasterClassesByCategory($arr) {
        foreach($arr as $value) {
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"width=150 /><br>';
            echo "<h2>".$value['title']."</h2>";
            echo "<a href='masterclass?id=".$value['id']."'>Edasi</a><br>";
        }
    }

    public static function AllMasterClasses($arr) {
        foreach($arr as $value) {
            echo "<li>".$value['title'];
            echo "<a href='masterclass?id=".$value['id']."'>Edasi</a></li><br>";
        }
    }

    public static function ReadMasterClasses($n) {
        echo "<h2>".$n['title']."</h2>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($n['picture']). '" width="150" /><br>';
        echo "<p>".$n['text']."</p>";
        echo "<p> Price: ".$n['price']." €</p>";
        echo "<p> Format: ".$n['format']."</p>";
        echo "<p>Data: ".$n['date']."</p>";
    }
}
?>