<?php
    ob_start();
?>
<div class="container">
    <div class="row block">
        <div class="col-md-6 h1">
            <h1>A masterclass is a space where you try, understand, and do it yourself.</h1>
        </div>
        <div class="col-md-6 h2">
            <div class="vertical-slider">
                <div class="slider-track">
                    <?php ViewMasterClasses::MasterClasses($arr); ?>
                </div>
            </div>
        </div>
    </div>
    <div  class="row block_2">
        <div class="col-md-6">
            <h2>What does each master class include?</h2>
        </div>
        <div class="col-md-6 block_ul">
            <ul>
                <li>Hands-on practical experience</li>
                <li>Step-by-step explanation and demonstration</li>
                <li>Personal guidance and answers to questions</li>
                <li>A safe space for trial and error</li>
                <li>Understanding how and why you do it</li>
                <li>A result that can be applied immediately</li>
            </ul>
        </div>
    </div>
    <div class="block_3">
        <h2>Trending now</h2>
        <div class="block_3 masterclasses-row">
            <?php ViewMasterClasses::PopMasterClasses($pop); ?>
        </div>
    </div>
    <div class="block_4">
        <h2>See what other participants are saying</h2>
        <!-- отзывы -->
         <div class="reviews-grid">
            <?php ViewMasterClasses::ReviewsPop($rev); ?>
        </div>
    </div>
</div>

<?php
    $content = ob_get_clean();

    include_once 'view/layout.php';
?>