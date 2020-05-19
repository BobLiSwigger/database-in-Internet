<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!---->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<link rel="stylesheet" href="css/swipebox.css">
<!---->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!---->
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!--script-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- swipe box js -->
        <script src="js/jquery.swipebox.min.js"></script> 
            <script type="text/javascript">
                jQuery(function($) {
                $(".swipebox").swipebox();
                });
        </script>

    <!-- //swipe box js -->

</head>
<body>
    <!--header-->   
        <div class="banner">
            <div class="container">
                
                <div class="banner-info">
                    <div class="logo wow fadeInRight animated" data-wow-delay=".5s">
                        <h3><a href="index.php">P</a></h3>
                    </div>
                        <h1 class="wow fadeInRight animated" data-wow-delay=".5s">2020-nCov</h1>
                        <p class="wow fadeInRight animated" data-wow-delay=".5s">Nankai University</p>
                </div>
                    
            </div>
        </div>
        <div class="content">
        <!--about-->
            <div class="about-w3" id="about">
                <div class="container">
                    <h2 class="tittle"><span>[</span> About NK <span>]</span></h2>
                    <p class="about-text">Nankai University Computer Science Internet Datebase</p>
                    <div class="about-grids">
                        <div class="col-md-4 about-grid">
                            <div class="about-top">
                                <h4><i class="glyphicon glyphicon-heart-empty" aria-hidden="true"></i>渤海之滨</h4>
                                <span></span>
                            </div>
                            <p>渤海之滨，白河之津，见证巍巍南开</p>
                        </div>
                        <div class="col-md-4 about-grid">
                            <div class="about-top">
                                <h4><i class="glyphicon glyphicon-globe" aria-hidden="true"></i>公能之心</h4>
                                <span></span>
                            </div>
                            <p>公，即“先天下之忧而忧，后天下之乐而乐”的爱国意识与公德精神，能，即是经世致用、服务社会能力。</p>
                        </div>
                        <div class="col-md-4 about-grid">
                            <div class="about-top">
                                <h4><i class="glyphicon glyphicon-flag" aria-hidden="true"></i>百年风雨</h4>
                                <span></span>
                            </div>
                            <p>西南联合大学，峥嵘岁月，不忘初心</p>
                        </div>
                            <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <!--about-->
        


        
                <!--team-->
            <div class="team-w3l" id="team">
                <div class="container">
                    <h3 class="tittle"><span>[</span> Team <span>]</span></h3>
                        <p class="about-text">Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent. per conubia nostra, per inceptos himenaeos. Nullam ac urna eu felis dapibus condimentum sit. amet a augue.</p>                        
                    <div class="team-grids">
                        <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides" id="slider">
                                    <li>     
                                        <div class="caption">
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t1.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>John Thomson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t2.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Mary Doe</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t3.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Anderson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t4.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Anderson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                     <li>    
                                        <div class="caption">
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t5.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>John Thomson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t6.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Mary Doe</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t4.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Anderson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left">
                                                <img src="images/t1.jpg" class="img-responsive" alt=""/>
                                                <div class="cap">
                                                    <h4>Anderson</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore </p>
                                                    <div class="social-icons">
                                                        <a href="#"><i class="icon"></i></a>
                                                        <a href="#"><i class="icon1"></i></a>
                                                        <a href="#"><i class="icon2"></i></a>
                                                        <a href="#"><i class="icon3"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--team-->
            
    <div class="footer" id="contact">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-3 footer-left">
                    <h4>Address</h4>
                        <address>
                            958 Folsom Ave, Suite 900<br>
                            San Francisco, CA 994<br>
                            <abbr title="Phone">P :</abbr> (123) 786-2534
                        </address>
                </div>
                <div class="col-md-6 footer-middle">
                    <h4>Contact</h4>
                    <form>
                        <div class="ft-lt">
                            <input type="text" value="First Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'First Name';}">  
                            <input type="text" value="Last Name" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Last Name';}">                
                            <input type="text" value="Email Address" placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                        </div>
                        <div class="ft-rgt">
                            <textarea placeholder="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>   
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 footer-left">
                    <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#"><i class="icon"></i></a>
                            <a href="#"><i class="icon1"></i></a>
                            <a href="#"><i class="icon2"></i></a>
                        </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="footer-text">
                <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.freemoban.com/">www.freemoban.com</a></p>
            </div>
        </div>
    </div>
            <script type="text/javascript">
                        $(document).ready(function() {
                            /*
                            var defaults = {
                                containerID: 'home', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                            };
                            */
                            
                            $().UItoTop({ easingType: 'easeOutQuart' });
                            
                        });
                    </script>
                <a href="#" id="home" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body">
                            <div class="news-gr">
                            <img src="images/j.jpg" class="img-responsive" alt=""/>
                            <h3 class="tittle">Pecuniary</h3>
                                <p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>
                                <p>Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pel ermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>