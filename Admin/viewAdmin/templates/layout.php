<html>
    <head>
        <title>Dashboard</title>
        <link href="public/css/bootstrap.css" rel="stylesheet">
        <link href="public/css/mystyle.css" rel="stylesheet">
        <link href="public/css/font-awesome.min.css" rel="stylesheet">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/ajaxupload.3.5.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <?php
                if (isset($_SESSION['userId']) && isset($_SESSION['sessionId'])) {
            ?>
            <div class="header clearfix">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                    <?php
                        echo '<ul class="nav nav-pulls pull-right">
                            <li role="button">'.$_SESSION["name"].
                                '<a href="logout" style="display: inline;">Logout<i class="fa fa-sign-out"></i></a>   
                            </li>
                        </ul>';

                        if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") {
                            echo '<h4><a href="../" target=_blank>WEB SITE</a>';
                            echo '&#187 <a href="categoryAdmin">Categories</a>';
                            echo '&#187 <a href="masterclassesAdmin">Master Classes List</a>';
                            echo '</h4>';
                        } else {
                            echo '<h4>You don\'t have the rights!</h4>';
                        }
                    ?>

                    </div>
                </nav>
            </div>

            <?php
                }
            ?>
            <div id="content" style="padding-top: 20px;">
                <?php echo $content; ?>
            </div>
            <footer class="footer">
                <p>Master classes &copy;</p>
            </footer>
        </div>
    </body>
</html>