<html>

<head>
  <title> Science Search </title>
</head>

<body bgcolor="7FFFD4">
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=145443995467203";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style type="text/css">
h1 { font-size: 60px; }
    #myFixedDivTopLeft {
        position: fixed;
        top: 0;
        left: 0;
        ...
    }
    #myFixedDivTopRight {
        position: fixed;
        top: 0;
        right: 0;
        ...
    }
    #myFixedDivBottomRight {
        position: fixed;
        bottom: 0;
        right: 0;
        ...
    }
    #myFixedDivBottomLeft1 {
        position: fixed;
        bottom: 0;
        left: 0;
    }
    #myFixedDivBottomLeft2 {
        position: fixed;
        bottom: 12;
        left: 240;
    }
    #myFixedDivBottomLeft3 {
        position: fixed;
        bottom: 12;
        left: 420;
    }
    #myFixedDivBottomLeft4 {
        position: fixed;
        bottom: 12;
        left: 515;
    }


	

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}

nav ul {
        background: #efefef;	 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}

nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding: 25px 40px;
		color: #757575; text-decoration: none;
	}
nav ul ul {
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			padding: 15px 40px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}
nav ul ul ul {
	position: absolute; left: 100%; top:0;
}

</style>


<h1 align="center" style="font-family:tempus sans itc;"> Science Search </h1>


<img src="qr_code.jpg" id="myFixedDivBottomRight" align="right" style="width:150px;height:150px">


 <h2 style="font-family:tempus sans itc;" align="center">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=physics.php>Physics</a></li>
<li><a href=chemistry.php>Chemistry</a></li>
<li><a href=astronomy.php>Astronomy</a></li>
<li><a href=Math.php>Math</a></li>
<li><a href=biology.php>Biology</a></li>
<li><a href=earthScience.php>Earth Science</a></li>
<li><a href=technology.php>Technology</a></li>
<li><a href=engineering.php>Engineering</a></li>
<li><a href=healthMedicine.php>Health, Medicine</a></li>
<li><a href=natureOfScience.php>Nature of Science</a></li>
<li><a href=discrete.php>Discrete</a></li>
<li><a href=fraction.php>Fractions</a></li>
<li><a href=numberOperation.php>Number and Operations</a></li>
<li><a href=probability.php>Probability</a></li>
<li><a href=trigonometry.php>Trigonometry</a></li>

<li><a href=view.php>All</a></li>

  </ul>
 </li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Grade<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=k.php>K </a></li>
            <li><a href=1.php>Grade 1</a></li>
            <li><a href=2.php>Grade 2</a></li>
<li><a href=3.php>Grade 3 </a></li>
            <li><a href=4.php>Grade 4</a></li>
            <li><a href=5.php>Grade 5</a></li>
<li><a href=6.php>Grade 6</a></li>
            <li><a href=7.php>Grade 7</a></li>
<li><a href=8.php>Grade 8 </a></li>
            <li><a href=9.php>Grade 9</a></li>
            <li><a href=10.php>Grade 10</a></li>
<li><a href=11.php>Grade 11</a></li>
            <li><a href=12.php>Grade 12</a></li>

          </ul>
        </li>
        <li><a href="#">About Us</a></li>        
      </ul>
    </div>
  </div>
</nav>



<form align="center" action="result.php" method ="get">
  Search: <input type="text" name="Search">
  <input type="submit" value="Submit">
</form>

<form align="center">
  Search result here
</form>


<form id="myFixedDivTopRight" align="right" action="demo_form.asp">
  Username: <input type="text" name="Username"><br>
  Password: <input type="text" name="Password"><br>
  <button type="button">Sign Up</button>
  <button type="button">Login!</button>
</form>


<div class="fb-like" data-href="http://www.sjsu-cs.org/cs160/sec1group3/" data-width="240" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" id="myFixedDivBottomLeft1"></div>

<div id="myFixedDivBottomLeft2">
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
</div>

<div id="myFixedDivBottomLeft3">
<a href="https://twitter.com/share" class="twitter-share-button"  >Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs'); </script>
</div>


<a href="mailto:?subject=FW: This website is cool!
&body=http://www.sjsu-cs.org/cs160/sec1group3/" id="myFixedDivBottomLeft4"><button type="button">Forward to my friend</button></a>


<div>
<!--[if IE]>
<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" width="0" height="0">
 <param name="src" value="topgun.mp3">
 <param name="controller" value="false">
 <param name="autoplay" value="true">
 <param name="loop" value="false">
</object>
<a href="view.php" align="center">Read Education!</a>
<![endif]-->

<!--[if !IE]><!-->
<object type="audio/x-mpeg" data="topgun.mp3" width="0" height="0">
 <param name="src" value="topgun.mp3">
 <param name="controller" value="false">
 <param name="autoplay" value="true">
 <param name="loop" value="false">
</object>
<!--><![endif]-->
</div>

</body>
</html>