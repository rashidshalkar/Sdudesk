<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title>News</title>
	<link href="<?php echo URL::to('/');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo URL::to('/');?>/css/style2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
	    <div id="head" style="height: 119px;">
	      <div class="head_logo">
	        <a href="news/"><img class="logo" src="<?php echo URL::to('/');?>/img/photo5206665854123616434.jpg" alt=""></a>
	      </div>
	    </div>
    </header>

    <div id ="content">
    	<div class="content_middle">
    		<div class="menu">
    			<div class="menu_bar">
				  <h2>All</h2>
	              <div class="item">
	                <a href="#">Event Club</a>
	              </div>

	              <div class="item">
	               	<a href="#">Debate club</a>
	              </div>

	              <div class="item">
	                	<a href="#">Unity club</a>
	              </div>

	              <div class="item">
	              		<a href="#">Sport club</a>
	              </div>

            	</div>
    		</div>

 			    		<div class="item_content">
    			<div class="item_menu">
					<div class="item_menu_position">
						<div class="head">
	                		<div class="title">
								<h2><a href="#">Magna sed adipiscing</a></h2>
								<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
							</div>
							<div class="meta">
								<div class="publish">
									<time class="published" datetime="2015-11-01">November 1, 2015</time>
								</div>
								<div class="author_info">
									<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
								</div>
							</div>
                		</div>
					
						<div class="news_photo">
							<img src="img/frontend.jpg" alt="photo">
						</div>

						<div class="news_content">
							<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
							</p>
							<p>Nunc quis dui scelerisque, scelerisque urna ut, dapibus orci. Sed vitae condimentum lectus, ut imperdiet quam. Maecenas in justo ut nulla aliquam sodales vel at ligula. Sed blandit diam odio, sed fringilla lectus molestie sit amet. Praesent eu tortor viverra lorem mattis pulvinar feugiat in turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce ullamcorper tellus sit amet mattis dignissim. Phasellus ut metus ligula. Curabitur nec leo turpis. Ut gravida purus quis erat pretium, sed pellentesque massa elementum. Fusce vestibulum porta augue, at mattis justo. Integer sed sapien fringilla, dapibus risus id, faucibus ante. Pellentesque mattis nunc sit amet tortor pellentesque, non placerat neque viverra. </p>
						</div>
					</div>
                	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
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
