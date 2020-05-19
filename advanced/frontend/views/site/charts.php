
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
<script type="text/javascript" src="js/echarts.min.js"></script>
<script type="text/javascript" src="js/china.js"></script>
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
    <!-- <div class="banner">
      <div class="container">
        <div class="navigation wow fadeInLeft animated" data-wow-delay=".5s">
          
        </div>
        <div class="banner-info">
          <div class="logo wow fadeInRight animated" data-wow-delay=".5s">
            <h3><a href="index.html">P</a></h3>
          </div>
            <h1 class="wow fadeInRight animated" data-wow-delay=".5s">Pecuniary</h1>
            <p class="wow fadeInRight animated" data-wow-delay=".5s">Nam libero tempore, cum soluta nobis .</p>
        </div>
          
      </div>
    </div> -->
    <div class="content">
   
    <!--count-->
      <div class="count-agileits">
        <div class="container">
          <h3 class="tittle1"><span>[</span> 全国实时疫情 <span>]</span></h3>
          <div class="count-grids">
            <div class="col-md-3 count-grid">
            <i class="glyphicon glyphicon-filter" aria-hidden="true"></i>
              <div class="count hvr-bounce-to-bottom">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105206' data-delay='.5' data-increment="100">105206</div>
                  <span></span>
                  <h5>累计确诊</h5>
              </div>
            </div>
            <div class="col-md-3 count-grid">
            <i class="glyphicon glyphicon-hand-left" aria-hidden="true"></i>
              <div class="count hvr-bounce-to-bottom">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
                  <span></span>
                  <h5>现存确诊</h5>
              </div>
            </div>
            <div class="col-md-3 count-grid">
            <i class="glyphicon glyphicon-time" aria-hidden="true"></i>
              <div class="count hvr-bounce-to-bottom">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
                  <span></span>
                  <h5>治愈</h5>
                </div>
            </div>
            <div class="col-md-3 count-grid">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              <div class="count hvr-bounce-to-bottom">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100">256</div>
                  <span></span>
                  <h5>死亡</h5>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
        <!--count-->
        

      <!-- gallery -->
        <div class="gallery" id="portfolio">
          <div class="container">
            <h2 class="tittle">众志成城</h2>
            <div class="gallery-grids">
              <div class="col-md-4 gal-left">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/1.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/2.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/3.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/4.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/5.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/6.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/7.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/8.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4 gal-left gal_mar">
                <div class="content-grid-effect slow-zoom vertical text-center">
                  <a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="img-box">
                      <img src="images/1.jpg" alt="image" class="img-responsive zoom-img">  
                    </div>
                  
                    <div class="info-box">
                      <div class="info-content">
                        <h4>Pecuniary</h4>
                        <span class="separator"></span>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
<!--gallery -->

<!-- charts -->
          <div class="chart",id ="chart">
              <div id="map" style="width: 800px;height:600px;"></div>
              <script type="text/javascript">

                var myChart = echarts.init(document.getElementById("map"));

                option = {
                        title: {
                          text: '全国新冠疫情图',
                          left: 'center'
                        },
                        tooltip: {
                          trigger: 'item'
                        },
                        legend: {
                          orient: 'vertical',
                          left: 'left',
                          data: ['中国疫情图']
                        },
                        visualMap: {
                          type: 'piecewise',
                          pieces: [
                            { min: 1000, max: 1000000, label: '大于等于1000人', color: '#372a28' },
                            { min: 500, max: 999, label: '确诊500-999人', color: '#4e160f' },
                            { min: 100, max: 499, label: '确诊100-499人', color: '#974236' },
                            { min: 10, max: 99, label: '确诊10-99人', color: '#ee7263' },
                            { min: 1, max: 9, label: '确诊1-9人', color: '#f5bba7' },
                          ],
                          color: ['#E0022B', '#E09107', '#A3E00B']
                        },
                        toolbox: {
                          show: true,
                          orient: 'vertical',
                          left: 'right',
                          top: 'center',
                          feature: {
                            mark: { show: true },
                            dataView: { show: true, readOnly: false },
                            restore: { show: true },
                            saveAsImage: { show: true }
                          }
                        },
                        roamController: {
                          show: true,
                          left: 'right',
                          mapTypeControl: {
                            'china': true
                          }
                        },
                        series: [
                          {
                            name: '确诊数',
                            type: 'map',
                            mapType: 'china',
                            roam: false,
                            label: {
                              show: true,
                              color: 'rgb(249, 249, 249)'
                            },
                            data: []
                          }
                        ]
                      }; 
                myChart.setOption(option);

                function getData() {
                   $.ajax({
                     url: "https://view.inews.qq.com/g2/getOnsInfo?name=disease_h5",
                     dataType: "jsonp",
                     success: function (data) {
                       //  console.log(data.data)
                       var res = data.data || "";
                       res = JSON.parse(res);
                       var newArr = [];
                       //newArr的数据格式为：
                       // [{
                       //   name: '北京11',
                       //   value: 212
                       // }, {
                       //   name: '天津',
                       //   value: 60
                       // }]
                       if (res) {
                         //获取到各个省份的数据
                         var province = res.areaTree[0].children;
                         for (var i = 0; i < province.length; i++) {
                           var json = {
                             name: province[i].name,
                             value: province[i].total.confirm
                           }
                           newArr.push(json)
                         }
                         console.log(newArr)
                         console.log(JSON.stringify(newArr))
                         //使用指定的配置项和数据显示图表
                         myChart.setOption({
                           series: [
                             {
                               name: '确诊数',
                               type: 'map',
                               mapType: 'china',
                               roam: false,
                               label: {
                                 show: true,
                                 color: 'rgb(249, 249, 249)'
                               },
                               data: newArr
                             }
                           ]
                         });
                       }
                     }
             
                   })
                 }
                 getData();
              </script>
            </div>
 <!-- chart -->   

<!--services-->
            <div class="services" id="services">
                <div class="container">
                    <h3 class="tittle"><span>[</span> Services <span>]</span></h3>
                        <p class="about-text1">Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent. per conubia nostra, per inceptos himenaeos. Nullam ac urna eu felis dapibus condimentum sit. amet a augue.</p>
                    <div class="service-grids">
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>UX design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>UI design</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>SEO Services</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="service-grids">
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>iOS App</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>Android App</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <div class="ser-left">
                                <i class="glyphicon glyphicon-flag" aria-hidden="true"></i>
                            </div>
                            <div class="ser-right">
                                <h4>Windows App</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--services-->

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