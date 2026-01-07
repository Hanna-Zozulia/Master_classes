<?php
    ob_start();
?>
<h1>All master classes</h1>
<br>

<?php
    ViewMasterClasses::AllMasterClasses($arr);
    $content = ob_get_clean();
    include_once 'view/layout.php';
?>