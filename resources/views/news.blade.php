<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title>News</title>
	<link href="<?php echo URL::to('/');?>/new/cssss/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL::to('/');?>/new/cssss/style2.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Eduma Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="<?php echo URL::to('/');?>/new/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo URL::to('/');?>/new/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo URL::to('/');?>/new/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="<?php echo URL::to('/');?>/new/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?php echo URL::to('/');?>/new/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- dropdown -->
<script src="<?php echo URL::to('/');?>/new/js/jquery.easydropdown.js"></script>
<!-- //dropdown -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo URL::to('/');?>/new/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo URL::to('/');?>/new/js/easing.js"></script>
<script type="text/javascript" src="<?php echo URL::to('/');?>/new/js/sort.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- accordian -->
<link rel="stylesheet" href="<?php echo URL::to('/');?>/new/css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>
      <script>
          $(function() {
            $( "#accordion" ).accordion();
          });
      </script>
<!-- //accordian -->
<!-- tabs -->
<script src="<?php echo URL::to('/');?>/new/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
            });
        });
    </script>
<!-- //tabs -->
<!--animate-->
<link href="<?php echo URL::to('/');?>/new/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo URL::to('/');?>/new/js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
</head>
<body>
	<header>
	   <div class="head">
        <a href="file:///Users/ayaulymalzhan/Downloads/Software-master%202/main/homePage/index.html">
            <div class="card" style="background-image: url('<?php echo URL::to('/');?>/new/img/campus.png'); background-size: cover;">
                <div class="title">
                    <p style="margin: auto; margin-top: 0px;">SDU NEWS</p>
                </div>
            </div>
        </a>

        <!-- <div class="menu1">
            <a  href="../homePage/index.html" style="width: 67px; margin: 0;float: right;margin-right: 5px;color: #2C5278;">home</a>
            <a  href="basket.html" style="width: 67px;margin: 0;float: right;margin-right: 5px; color: #2C5278;" onclick="auth();">basket</a>
            <a style="width: 67px;margin: 0;float: right;margin-right: 5px; color: #2C5278;" href="#" data-toggle="modal" data-target="#myModal">sign in</a>
        </div> -->
    </div>
    <div class="clearfix"></div>

            </div>
          <!--   <div class="socials">
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dd797b06396480a"></script>
            </div> -->
        <script>window.jQuery || document.write('<script src="<?php echo URL::to('/');?>/new/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>
    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document" style="width: 800px;">
        <div class="modal-content" style="width: 600px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body modal-spa">
                                <div class="login-grids">
                                    <div class="login">
                                        <div class="login-left">
                                            <ul>
                                                <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                                <li><a  class="goog" href="#"><i></i>Sign in with Google</a></li>
                                                <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                            </ul>
                                        </div>
                                        <div class="login-right">
                                            <form>
                                                <h3 style="color: #2C5278;">Sign in with your account </h3>
                                                <input style="color: #2C5278; border-color: #2C5278;" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                                <input style="color: #2C5278;border-color: #2C5278;" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                                <input type="submit" style="background-color: #2C5278 " value="Sign In" >
                                                <a style=" display: block;width:115px; margin: auto 0px; float: right;     padding-top: 15px; color: #2C5278;
    font-size: 15px;" href="#">Sign in as admin</a>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
          </div>

        </div>
      </div>
    </div>
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
        <script src="<?php echo URL::to('/');?>/new/js/bootstrap.js"></script>
    </header>

    <div id ="content">
    	<div class="content_middle">
    		<div class="menu">
    			<div class="menu_bar">
				   <div class="item">
                    <a href="/"  >Home</a>
                  </div>
	              <div class="item" >
	                <a href="#" onclick="Event();">Event Club</a>
	              </div>

	              <div class="item">
	               	<a href="#" onclick="Debate();">Debate club</a>
	              </div>

	              <div class="item">
	                	<a href="#" onclick="Unity();">Unity club</a>
	              </div>

	              <div class="item">
	              		<a href="#" onclick="Sport();">Sport club</a>
	              </div>

            	</div>
    		</div>

    		<div class="item_content">
    			<div class="item_menu" id="unity">
	                <div class="item_info">
	                	<div class="item_user_info">
	                		<h2 value="login_user">Unity Club</h2>
	                	</div>
		                <div class="item_pict">
		                	<a href="#" class="image featured"><img src="<?php echo URL::to('/');?>/new/img/telephone.jpg" alt=""></a>

		                </div>
		                <div class="item_description">
		                	<span><p><strong>Участвуй в конкурсе и выиграй телефон!</strong> 				... <a href="/more" >read more</a></p>
		                	</span>
		                </div>
		                <div class="comment">
		                	<input class="nurbol" type="textarea" placeholder="Add comment..." maxlength="2000">
		                </div>
            		</div>
            	</div>
            	<div class="item_menu" id="event" >
	                <div class="item_info">
	                	<div class="item_user_info">
	                		<h1 value="#">Event Club</h1>
	                	</div>
		                <div class="item_pict">
		                	<a href="#" class="image featured"><img src="<?php echo URL::to('/');?>/new/img/werrt.jpg" alt=""></a>

		                </div>
		                <div class="item_description">
		                	<span><p><strong>Дорогой студент, приглашаем испробовать себя в качестве ведущего на "SDU's Got Talent 2017". Если ты уже участвовал в такого рода мероприятиях или хочешь попробовать себя в роли ведущего впервые, тогда мы ждём тебя завтра:
							с 11:50 до 13:30
							с 16:00 до 17:00
							101 каб, экономический факультет.</strong> 				... <a href="/more" >read more</a></p>
		                	</span>
		                </div>
		                <div class="comment">
		                	<input class="nurbol" type="textarea" placeholder="Add comment..." maxlength="2000">
		                </div>
            		</div>
            	</div>
    		</div>
    		
    		<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript">
var fActive = '';

function filterColor(color){
 if(fActive != color){

 $('div').filter(':not(.'+color+')').slideUp();
 fActive = color;
 }
}

$('.f_red').click(function(){ filterColor('login_user'); });


</script>
    	</div>
    </div>
</body>
</html>
