<?php
    ob_start();
?>

<br>

<?php
    ViewMasterClasses::ReadMasterClasses($n);

    echo "<br>";
    ViewReviews::ReviewsForm();

    echo '<h2 class="all_reviews">All reviews</h2>';
    echo "<br>";
    Controller::Reviews($_GET['id']);

    $content = ob_get_clean();
    include_once 'view/layout.php';
?>