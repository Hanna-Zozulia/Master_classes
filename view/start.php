<?php
    ob_start();
?>
<h1>TOP 3 MASTER CLASS</h1>
<br>
<?php
    ViewMasterClasses::MasterClassesByCategory($arr);

    $content = ob_get_clean();

    include_once 'view/layout.php';
?>