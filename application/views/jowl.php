<!DOCTYPE html>
<html>
<head>
<title>JOwl</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/fa/css/font-awesome.css"); ?>" />
	<style type="text/css">
html, body {
    margin: 0;
    padding: 0;
}
 body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
body{
      background-color:#e7e5e4;
  background-repeat: no-repeat;
  background-attachment:fixed;
    background-size: cover;
}
body{
    background-image:url('<?php echo base_url("assets/images/back2.jpg"); ?>');
}
.test{
	background-color: rgba(19,19,19,0.85);
	text-align: center;
	height:100%;
	top:0;
	margin-left:0px;
    margin-top:0px;
    font-family: Palatino, "Palatino LT STD", "Palatino Linotype", "Book Antiqua", Georgia, serif;
}
hr { 
	width:25%; 
	height:0.3px; 
	background: #e7e5e4;
	border-radius: 0.5;
	border-width: 1px; 
}
.trans{
	font-size: 60px;
	font-weight:bold;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: rgba(231,229,228,0.4);
}
.or-spacer {
    width:400px;
    position:relative;
}
.or-spacer .mask {
    overflow:hidden;
    height:20px;
}
.or-spacer .mask:after {
    content:'';
    display:block;
    margin:-25px auto 0;
    width:100%;
    height:25px;
    border-radius:125px / 12px;
    box-shadow:0 0 8px rgba(231,229,228,0.6);
}
.or-spacer span {
    width:50px;
    height:50px;
    position:absolute;
    bottom:100%;
    margin-bottom:-25px;
    left:50%;
    margin-left:-25px;
    border-radius:100%;
    box-shadow:0 2px 4px #999;
    background:white;
}
.or-spacer span i {
    position:absolute;
    top:4px;
    bottom:4px;
    left:4px;
    right:4px;
    border-radius:100%;
    border:1px dashed #aaa;
    text-align:center;
    line-height:40px;
    font-style:normal;
    color:#999;
}
.container{
	text-align: center;
	background-color: rgba(19,19,19,0.85);
    font-family: Palatino, "Palatino LT STD", "Palatino Linotype", "Book Antiqua", Georgia, serif;
    left: 0;
    width:100%;
    height:100%;
}
.container-full {
  margin: 0 auto;
  width: 100%;
  min-height:100%;
  background-color:#110022;
  color:#eee;
  overflow:hidden;
}

.container-full a {
  color:#efefef;
  text-decoration:none;
}

.v-center {
  margin-top:7%;
}
.active {
    font-family:'Droid Sans', serif;
    font-size: 14px;
    color: #fff;
    text-decoration: none;
    line-height: 50px;
}
a {
    font-family:'Droid Sans', serif;
    font-size: 14px;
    color: black;
    text-decoration: none;
    line-height: 50px;
}
@media only screen and (max-width: 923px) {
    .damn {
        display: none;
    }
}
.button
{
  text-align:center;
  letter-spacing: 2px;
  color: #131313;
  
  font-size: 137.5%;
  font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
  font-weight: 500;
  
  padding: 28px 50px;
  width: 15%;
  height:5.7%;

  background: #131313 ;
  border: 1px solid #131313 ;
  color: #e7e5e4;
  overflow: hidden;
  
  transition: all 0.5s;
  cursor:pointer;
	
	
    box-shadow: 
      1px -1px 0 rgba(0,0,0,0.7), 
      -2px 2px 1px rgba(0,0,0,0.5),  
      -4px 4px 1px rgba(0,0,0,0.3), 
      -6px 6px 1px rgba(0,0,0,0.2),
	  -8px 8px 1px rgba(0,0,0,0.1),   
      -10px 10px 1px rgba(0,0,0,0.05);
}
a.button
{
  text-align:center;
  letter-spacing: 2px;
  color: #131313;
  
  font-size: 137.5%;
  font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
  font-weight: 500;
  
  padding: 28px 50px;
  width: 15%;
  height:5.7%;

  background: #131313 ;
  border: 1px solid #131313 ;
  color: #e7e5e4;
  overflow: hidden;
  
  transition: all 0.5s;
  cursor:pointer;
	
	
    box-shadow: 
      1px -1px 0 rgba(0,0,0,0.7), 
      -2px 2px 1px rgba(0,0,0,0.5),  
      -4px 4px 1px rgba(0,0,0,0.3), 
      -6px 6px 1px rgba(0,0,0,0.2),
	  -8px 8px 1px rgba(0,0,0,0.1),   
      -10px 10px 1px rgba(0,0,0,0.05);
}
.button:hover, .button:active 
{
  text-decoration: none;
  color: color:rgba(231,229,228,0.8);
  border-color: #131313;
  background-color: rgba(19,19,19,0.1);
	
    }

.button span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -7px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #e7e5e4;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-135deg);
  
}

.button:hover span, .button:active span 
{
  padding-right: 30px;
}

.button:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: rgba(231,229,228,0.8);
  right: 0;
  top: 50%;
}
.social {
    position: relative;
    height: 3em;
    width: 13.5em;
    margin: 100px 42.5%;
}

.social li {
    display: block;
    height: 4em;
    line-height: 4em;
    margin: -2.2em;
    position: absolute;
    -webkit-transition: -webkit-transform .7s;
    -moz-transition: -moz-transform .7s;
    -ms-transition: -ms-transform .7s;
    -o-transition: -o-transform .7s;
    transition: transform .7s;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    text-align: center;
    width: 4em;

}

.social a {
    color: #fffdf0;
    display: block;
    height: 4em;
    line-height: 6em;
    text-align: center;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    width: 4em; 
  
}

.social li:hover {
  -webkit-transform: scale(1.3,1.3) rotate(45deg);
    -moz-transform: scale(1.3,1.3) rotate(45deg);
  -ms-transform: scale(1.3,1.3) rotate(45deg);
    -o-transform: scale(1.3,1.3) rotate(45deg);
  transform: scale(1.3,1.3) rotate(45deg);
}

.facebook {
    background: #155b9d;
    left: 0;
    top: 0%;
}

.twitter {
    background: #1a9ec4;
    bottom: 0;
    left: 25%;
}
.insta {
    background: -webkit-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -webkit-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
	background: -moz-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -moz-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
	background: -ms-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -ms-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
	background: -o-radial-gradient(32% 106%, circle cover, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), -o-linear-gradient(-45deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
	background: radial-gradient(circle farthest-corner at 32% 106%, rgb(255, 225, 125) 0%, rgb(255, 205, 105) 10%, rgb(250, 145, 55) 28%, rgb(235, 65, 65) 42%, transparent 82%), linear-gradient(135deg, rgb(35, 75, 215) 12%, rgb(195, 60, 190) 58%);
    top: 0%;
    left: 50%;
}   
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="80">
<header class="test" id="AboutUs">
<h1 class="trans" style="color:rgba(19,19,19,0.4); margin-top:0px; padding-top:50px;">~Know Me~</h1>
<div class="or-spacer" style="margin:auto;">
  <div class="mask"></div>
</div>
<h3 style="color:rgba(231,229,228,0.6); margin:1.9% 20%;">
</br>
3 weeks since I started my journey.. finally my Creators regained their investment and gained some profit also.. cheers to that!!

But am I really that good? Doubtful?

Tell me people please.. I wanna hear from you all so that I can serve you all better..

Now I will be present on FRIDAY also.. Enjoy your late night delicious food “just a night before weekend” also 🙂
</br></br></br><br>
4 Feb, 2017. My D.O.B. All of a sudden! <br>Feels like I am gaining some momentum.. haha.. thanks to the lovely people of SRM University.. they have started to know about my existence..

I have been created to keep my Creator’s people happy.. So here I am with delicious foods for you all late at night.. just ping me @+91-7397-228-398 or +91-7708-528-198 to book your order and I will be there for you all! 🙂<br><br>
</h3>
</header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#AboutUs">JOwl</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#Menu">Menu</a></li>
          <li><a href="#Gallery">Gallery</a></li>
          <li><a href="#Contact">Contact Us</a></li>
          <li><a href="<?php echo base_url();?>index.php/chat/order_now">Order</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div>
</div><div>
</div><div>
</div><div class="damn">
</div>
<div class="container" id="Menu" style="margin:50px auto; height:100% ">
<h1 class="trans" style="color:rgba(19,19,19,0.4); margin-top:90px;">Menu</h1>
	<div class="or-spacer" style="margin:auto;">
 	 <div class="mask"></div>
	</div>
    <div class="row" >
        <div class="col-md-4" >
            <div class="panel panel-default" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
                <div class="panel-heading" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.6); border:hidden;">
                    <h2 class="">Savory</h2>
                </div>
                <div class="or-spacer" style="margin: auto;">
  					<div class="mask"></div>
				</div>
                 <h3>Sandwiches</h3>
                <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Veg. Sandwich&nbsp;:&nbsp;34/-</h4>
                <h4>Egg Sandwich&nbsp;:&nbsp;39/-</h4>
                <h4>Chicken Sandwich&nbsp;:&nbsp;44/-</h4>
                <h4>Royal Veg. Sandwich&nbsp;:&nbsp;44/-</h4>
                <h4>Royal Egg Sandwich&nbsp;:&nbsp;49/-</h4>
                <h4>Royal Chicken Sandwich&nbsp;:&nbsp;54/-</h4>
                <h4>Egg Bhujia Sandwich&nbsp;:&nbsp;49/-</h4>
                <h4>Paneer Bhujia Sandwich&nbsp;:&nbsp;49/-</h4></div>

                 <h3>Special</h3>
                <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Sandwicheese&nbsp;:&nbsp;44/-</h4>
                <h4>Pav Bhaji&nbsp;:&nbsp;49/-</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
                <div class="panel-heading" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.6); border:hidden;">
                    <h2 class="">Sweet</h2>
                </div>
                <div class="or-spacer" style="margin: auto;">
  					<div class="mask"></div>
				</div>
                 <h3>Sandwiches</h3>
                 <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Dark Chocolate Sandwich&nbsp;:&nbsp;49/-</h4>
                <h4>Milk Chocolate Sandwich&nbsp;:&nbsp;49/-</h4>
                <h4>Caramel Dark Chocolate Sandwich&nbsp;:&nbsp;54/-</h4>
                <h4>Caramel Milk Chocolate Sandwich&nbsp;:&nbsp;54/-</h4>
                <h4>Cheesy Dark Chocolate Sandwich&nbsp;:&nbsp;64/-</h4>
                <h4>Cheesy Milk Chocolate Sandwich&nbsp;:&nbsp;64/-</h4>
                </div>
                <h3>Special</h3>
                <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Owl's Toast&nbsp;:&nbsp;49/-</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
                <div class="panel-heading" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.6); border:hidden;">
                    <h2 class="">Drinks</h2>
                </div>
                <div class="or-spacer" style="margin: auto;">
  					<div class="mask"></div>
				</div>
                 <h3>Lassi</h3>
                 <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Normal Lassi&nbsp;:&nbsp;35/-</h4>
                <h4>Mango Lassi&nbsp;:&nbsp;40/-</h4>
                <h4>Banana Lassi&nbsp;:&nbsp;40/-</h4>
                <h4>Strawberry Lassi&nbsp;:&nbsp;45/-</h4>
                <h4>Butterscotch Lassi&nbsp;:&nbsp;&nbsp;45/-</h4>
                <h4>Caramel Lassi&nbsp;:&nbsp;50/-</h4>
                <h4>Kiwi Lassi&nbsp;:&nbsp;50/-</h4>
                <h4>Black Current Lassi&nbsp;:&nbsp;50/-</h4>
                </div>
                 <h3>Milkshakes</h3>
                 <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Badam Pista Milkshake&nbsp;:&nbsp;40/-</h4>
                <h4>Mango Milkshake&nbsp;:&nbsp;40/-</h4>
                <h4>Banana Milkshake&nbsp;:&nbsp;40/-</h4>
                <h4>Strawberry Milkshake&nbsp;:&nbsp;45/-</h4>
                <h4>Butterscotch Milkshake&nbsp;:&nbsp;&nbsp;45/-</h4>
                <h4>Caramel Milkshake&nbsp;:&nbsp;50/-</h4>
                <h4>Kiwi Milkshake&nbsp;:&nbsp;50/-</h4>
                <h4>Black Current Milkshake&nbsp;:&nbsp;50/-</h4>
                <h4>Chocolate Milkshake&nbsp;:&nbsp;50/-</h4>
                </div>
                <h3>Packed Drinks @ MRP</h3>
                <div class="panel-body" style="background-color:rgba(19,19,19,0); text-align:right">
                <h4>Coca-Cola</h4>
                <h4>Mountin Dew</h4>
                <h4>Pepsi</h4>
                <h4>Mirinda</h4>
                <h4>Sprite</h4>
                </div>
            </div>
        </div>

        <a class="button" href="<?php echo base_url();?>index.php/chat/order_now"><span>Order Now!</span></a><br/><br/><br/>
    </div>
</div>
<div class="container" id="Gallery" style="padding-bottom:50px;padding-top:50px;">

<h1 class="trans" style="color:rgba(19,19,19,0.4);">Gallery</h1>
	<div class="or-spacer" style="margin:auto;">
 	 <div class="mask"></div>
	</div>
 <script src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/jssor.slider-23.0.0.mini.js"); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('<?php echo base_url("assets/images/img/a17.png"); ?>') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('<?php echo base_url("assets/images/img/t01.png"); ?>') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:456px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo base_url("assets/images/img/loading.gif"); ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:356px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/01.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-01.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/02.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-02.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/03.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-03.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/04.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-04.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/05.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-05.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/06.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-06.jpg"); ?>" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/07.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-07.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/08.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-08.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/09.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-09.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/10.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-10.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/11.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-11.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/12.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-12.jpg"); ?>" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/img/13.jpg"); ?>" />
                <img data-u="thumb" src="<?php echo base_url("assets/images/img/thumb-13.jpg"); ?>" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>
    </div>
</div>

<div class="container" id="Contact" style="margin: 50px auto;">

<h1 class="trans" style="color:rgba(19,19,19,0.4);">Contact Us</h1>
	<div class="or-spacer" style="margin:auto;">
 	 <div class="mask"></div>
	</div>
    <div class="row">
        <div class="col-md-6" >
            <div class="well well-sm" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
            <h3 style="margin:0px auto;">Follow Us:</h3>
            <div>
                                 <ul class="social">
                                  <li class="facebook"><a href="http://facebook.com/alterowo"><i class="fa fa-facebook fa-3x"></i></a></li>
                                  <li class="twitter"><a href="http://twitter.com/Kyokushinowa"><i class="fa fa-twitter fa-3x"></i></a></li>
                                  <li class="insta"><a href="https://www.behance.net/Kurnikowa"><i class="fa fa-instagram fa-3x"></i></a></li>
                                </ul>
            </div>
            <div>
            
            <form action="<?php echo base_url();?>index.php/chat/feedback_submit" method="POST">
            <h3 style="display:inline-block;">Feedback:</h3>
					<?php if($err!=''){ ?>
					<div class="alert alert-danger">
					<?php echo $err; ?>
					</div><?php }?>
					<?php if($res!=''){ ?>
					<div class="alert alert-success">
					<?php echo $res; ?>
					</div><?php }?>
            	<textarea class="form-control" name="feedback" rows="5" id="comment"></textarea>
            	<input type="submit" class="button" style="padding:10px 90px 10px 17.5px; margin:20px auto;"></form>
            </form>
            </div>
            </div>

        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
                    
                    <div class="panel-body text-center" style="background-color:rgba(19,19,19,0); color:rgba(231,229,228,0.8); border:hidden;">
                        <h3><span class="glyphicon glyphicon-home"></span>&nbsp;Address</h3>
                        <div>
                        <h4>Potheri First street,<br />
                        SRM University, Kattankulathur, <br />
                        603203, Kanchipuram Dt. Tamil Nadu, India.<br /></h4>

                        <h3><span class="glyphicon glyphicon-phone"></span>&nbsp;Phone Number:</h3>
                        <h4>+91-7397-228-398<br /></h4>
                        </div><br/>
    					<div id="map" style=" border: 2px solid rgba(231,229,228,0.5); border-radius: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtziYUi0u2Ci4tluYfGa8-0UEvcfvYcw0&libraries=places&callback=initMap">
    </script>

<script type="text/javascript">
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 12.819478, lng: 80.039108},
          zoom: 15
        });

        var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        service.getDetails({
          placeId: 'ChIJc1UWXGz3UjoRAzGYcgifZTI'
        }, function(place, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
              map: map,
              position: place.geometry.location
            });
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                'Place ID: ' + place.place_id + '<br>' +
                place.formatted_address + '</div>');
              infowindow.open(map, this);
            });
          }
        });
      }
</script>

<style>
    #map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }
    .header {
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script>
var v=0;
$(document).ready(function(){
    $(window).scroll(function(){
        if (!$(".navbar").is('.affix, .affix-top, .affix-bottom')) {
 			v=0;
		}		
    });
});
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("nav a").on('click', function(event) {
  var txt = $(event.target).text();
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      if(txt=='Menu'&& v==0){
      	v=1;
      	$('html, body').animate({
              scrollTop: $(hash).offset().top+30
            }, 800, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });

      }else
      {$('html, body').animate({
              scrollTop: $(hash).offset().top-30
            }, 800, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });}
    } // End if
  });
});

</script>
</body>
</html>