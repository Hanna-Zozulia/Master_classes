<?php
    ob_start();
?>

<br>

<?php
    ViewMasterClasses::ReadMasterClasses($n);

    echo "<br>";
    Controller::Reviews($_GET['id']);

    echo "<br>";
    ViewReviews::ReviewsForm();

    $content = ob_get_clean();
    include_once 'view/layout.php';
?>