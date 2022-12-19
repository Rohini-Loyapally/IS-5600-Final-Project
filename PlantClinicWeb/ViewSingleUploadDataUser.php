<!DOCTYPE HTML>
<html>
    <head>
        <title>Plants Clinic </title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="css/swipebox.css">
        <!------ Light Box ------>
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <!------ Eng Light Box ------>

        <script language="JavaScript">
            function validate()
            {
                for (i = 0; i < loginForm.length; i++)
                {
                    if ((loginForm.elements[i].value == ""))
                    {
                        alert("You must provide a value for the field named: " + loginForm.elements[i].name);
                        return false;
                    }
                }

                var stremail = document.loginForm.username.value;
                var validemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                if (validemail.test(stremail) == false)
                {
                    alert("Pleas enter valid email");
                    document.loginForm.username.value = "";
                    document.loginForm.username.focus();
                    return false;
                }
                return true;
            }
        </script>



    </head>
    <body>
        <!-- header -->
        <div class="banner1">
            <div class="container">
                <div class="header">
                    <div class="head-nav">
                        <span class="menu"> </span>
                        <ul class="cl-effect-1">

                            <li><a href="userPanel.php">User Panel</a></li>
                            <li><a href="uploadQun.php">Upload Questions</a></li>
                            <li class ="active"><a href="viewUserQunStats.php">View My Questions Stats</a></li>
                            <li><a href="index.html">Logout</a></li>


                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fb"></i></a></li>
                            <li><a href="#"><i class="twt"></i></a></li>
                            <li><a href="#"><i class="goog"></i></a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>			
                <!-- script-for-nav -->
                <script>
                    $("span.menu").click(function () {
                        $(".head-nav ul").slideToggle(300, function () {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script-for-nav -->
                <div class="logo1">
                    <a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
                </div>
            </div>
        </div>
        <!-- header -->
        <!-- service -->

        <div class="container">
            <div class="products-section">
                <!-- portfolio-section -->
                <div class="portfolio"  id="portfolio">
                    
                    <div class="contact-form">
                    <?php
                        error_reporting(E_ERROR);
                        session_start();
                        $DB_HOST = "localhost";
                        $DB_UID = "root";
                        $DB_PASS = "";
                        $DB_NAME = "plantclinic";

                        $db_con = mysqli_connect($DB_HOST, $DB_UID, $DB_PASS) or die('Unable to Connect Database');

                        mysqli_select_db($db_con, $DB_NAME);

                        $ID = $_GET["id"];


                        echo "<form action = 'UploadAnser.php' method = 'post'>";
                        echo "<table width = 100% class = 'table'>";

                        echo '<tr>';
                        echo "<td colspan = '2' align = 'center'><h3>Data Uploaded</h3></td>";
                        echo '</tr>';
                        $sql = "select * from questions where id = $ID";

                        $result = mysqli_query($db_con,$sql);

                        if ($rows = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo "<td>ID : </td>" . "<td><input type = text name = 'id' value = '" . $rows["id"] . "' readonly></td>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>Farmer Name : </td>" . "<td><input type = text value = '" . $rows["username"] . "' readonly></td>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>Phone : </td>" . "<td><input type = text value = '" . $rows["phone"] . "' readonly></td>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>EMail : </td>" . "<td><input type = text value = '" . $rows["email"] . "' readonly></td>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>Description : </td>" . "<td><input type = text value = '" . $rows["descr"] . "' name = 'qun' readonly></td>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>Image : </td>" . "<td><a href='uploads\\" . $rows["filename"] . "'> <img src = uploads\\" . $rows["filename"] . " width = '220px' height = '230px' class = 'img-responsive'></a></td><br/><br/>";
                            echo '</tr>';
                            echo '<tr>';
                            echo "<td>Suggestion : </td>" . "<td><textarea name ='ans'>". $rows["suggestion"] ." </textarea></td>";
                            echo '</tr>';
                            
                        }
                        echo '</table>';
                        echo '</form>';

                        

                        mysqli_close($db_con);
                        ?>

                    
                    
                    <div class="clearfix"></div>
                </div>
                <!-- Script for gallery Here -->
                <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
                <script type="text/javascript">
            $(function () {

                var filterList = {
                    init: function () {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },
                    hoverEffect: function () {

                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                                function () {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function () {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                        );

                    }

                };

                // Run the show!
                filterList.init();


            });
                </script>
                <!-- portfolio-section  -->

            </div>
        </div>
        <!-- products -->
        <div class="footer">
            <div class="container">
                <p>Plants Clinic © 2022</p>
            </div>
        </div>
    </body>
</html>