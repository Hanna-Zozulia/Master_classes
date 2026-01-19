<?php
    ob_start();
?>

<!--  -->

<h1>Master Classes </h1>
<br>

<?php
    ViewMasterClasses::MasterClassesByCategory($arr);
    $content = ob_get_clean();
    include_once 'view/layout.php';
?>