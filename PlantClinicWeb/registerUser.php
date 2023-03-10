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
            function validate(form1)
            {
                for (i = 0; i < form1.length; i++)
                {
                    if ((form1.elements[i].value == "")) {
                        alert("You must provide a value for the field named: " + form1.elements[i].name)
                        return false
                    }
                }

                var name = document.form1.name.value;
                var validname = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ. ";
                for (i = 0; i < validname.length; i++) {
                    if (validname.indexOf(name.charAt(i)) == -1) {
                        alert("Pleas enter valid name");
                        document.form1.name.value = "";
                        document.form1.name.focus();
                        return false;
                    }
                }

                var design = document.form1.design.value;
                var validname = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.& ";
                for (i = 0; i < validname.length; i++) {
                    if (validname.indexOf(design.charAt(i)) == -1) {
                        alert("Pleas enter valid designation");
                        document.form1.design.value = "";
                        document.form1.design.focus();
                        return false;
                    }
                }

                var phonestart9 = document.form1.address.value;
                var validphonestart9 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.& "
                if (validphonestart9.indexOf(phonestart9.charAt(0)) != '9') {
                    alert("Enter Valid Address");
                    document.form1.address.value = "";
                    document.form1.address.focus();
                    return false;
                }

                var phonelength = "" + document.form1.mobile.value;
                if (phonelength.length < 10) {
                    alert("The Phone Number Must Have 10 Digits");
                    document.form1.mobile.value = "";
                    document.form1.mobile.focus();
                    return false;
                }


                var stremail = document.form1.email.value;
                var validemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (validemail.test(stremail) == false) {
                    alert("Pleas enter valid Email Id");
                    document.form1.email.value = "";
                    document.form1.email.focus();
                    return false;
                }

                return true
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
                            <li><a href="index.html">home</a></li>
                            <li class ="active"><a href="login.html">User Login</a></li>
                            <li><a href="loginFaculty.html">Expert Login</a></li>
                            <li><a href="adminLogin.html">Admin Login</a></li>
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
                    <h3 class="style">Registration</h3>
                    <div class="contact-form">
                        <form method="post" action="RegUser.php" name = "form1" onsubmit = "return validate(this)">
                            <div>
                                <span><label>Name</label><font color ='red'>*</font></span>
                                <span><input name="name" type="text" class="textbox" required></span>
                            </div>

                            <div>
                                <span><label>Mobile</label><font color ='red'>*</font></span>
                                <span><input name="mobile" type="text" class="textbox" required ></span>
                            </div>

                            <div>
                                <span><label>Email Id</label><font color ='red'>*</font></span>
                                <span><input name="email" type="text" class="textbox" required></span>
                            </div>
                            <div>
                                <span><label>Password</label><font color ='red'>*</font></span>
                                <span><input name="password" type="password" class="textbox" required></span>
                            </div>
                            <div>
                                <span><label>Address</label><font color ='red'>*</font></span>
                                <span><input name="address" type="text" class="textbox" required></span>
                            </div>


                            <div>
                                <span><input type="submit" value="Register"></span>
                            </div>
                        </form>
                    </div>
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
                <p>Plants Clinic ?? 2022</p>
            </div>
        </div>
    </body>
</html>