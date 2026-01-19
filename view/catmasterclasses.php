<?php
    ob_start();
?>

<?php
$categoryName = '';
foreach ($cat as $c) {
    if ($c['id'] == $arr[0]['category_id']) {
        $categoryName = $c['name'];
        break;
    }
}
?>

<h1>Master Classes <?= htmlspecialchars($categoryName) ?></h1>
<br>

<?php
    ViewMasterClasses::MasterClassesByCategory($arr);
    $content = ob_get_clean();
    include_once 'view/layout.php';
?>