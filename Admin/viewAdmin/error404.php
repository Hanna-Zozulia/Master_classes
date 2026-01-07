<?php ob_start() ?>
<h2>Error 404</h2>
<article>
    <h3>404 error - what is it?</h3>
    <p>The page you requested could not be found</p>
</article>
<?php 
    $content = ob_get_clean();
    include "viewAdmin/templates/layout.php";
?>