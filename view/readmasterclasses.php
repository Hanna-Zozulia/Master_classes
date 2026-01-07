<?php
    ob_start();
?>

<br>

<?php
    ViewMasterClasses::ReadMasterClasses($n);
    $content = ob_get_clean();
    include_once 'view/layout.php';
?>