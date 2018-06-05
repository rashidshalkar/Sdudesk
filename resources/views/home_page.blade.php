<!DOCTYPE html>
<html class="js no-touch history backgroundsize cssgradients csstransforms csstransforms3d csstransitions svg no-android no-ios6" lang="en" style="">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <script type="text/javascript" async="" src="assets/js/myscripts.js"></script>
      <title>SDU DESK</title>
</head>
<body>
<header>
    <div id="head" style="background-image: url('images/campus.png'); background-size: cover;">
        <div class="title">
            <p style="margin: auto; margin-top: 3px;">SDU DESK</p>
        </div>
    </div>
</header>
<div id="container">
    <div onmouseover="setColor()" style= "cursor: pointer" onmouseout="returnColor()" class="box" onclick="location.href='news/'">
    <div id="circle">
        <div class="glavy"><p id="news" style="margin:auto; margin-bottom: 15px;">NEWS</p>
            <hr id="line1" class="line">
        </div>
    </div>
    </div>
    <div onmouseover="change()" style= "cursor: pointer" onmouseout="returnState()" class="box" onclick="location.href='lostfound/'">
        <div id= "romb">
        <div class="glavy" style="">
            <p id="lostFound" style="margin-bottom: 15px; color: #A25AFF;">LOST & FOUND</p>
            <hr id="line2" class="line" style="width: 215px;">
         </div>
        </div>
    </div>
    <div onmouseover="changeTriangle()" style= "cursor: pointer" onmouseout="returnTriangle()" class="box" onclick="location.href='/market'">
        <div style="display: block; height: 300px;width: 318px; margin: auto;">
        <div id="triangle">
        <div class="glavy">
            <p id="market" style="margin-bottom: 7px; padding-top: 121px;">MARKET</p>
              <hr id="line3" class="line" style="width: 111px;">
        </div>
        </div>
    </div>
    </div>
</div>
<footer>

</footer>
</body>
</html>
