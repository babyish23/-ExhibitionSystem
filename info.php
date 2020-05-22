<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">回到首頁</a>
				<!--nav>
					<a href="#menu">Menu</a>
				</nav-->
			</header>

		<!-- Nav
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
				</ul>
			</nav>
		-->
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1><font face="DFKai-sb">元智大學資工系專題展專區</font></h1>
					<p><b>展覽位置: <a href="https://www.yzu.edu.tw/aboutyzu/index.php/tw/2016-02-09-06-52-11">元智大學一館三樓</a><br>
					更多資訊: <a href="https://www.cse.yzu.edu.tw">元智大學資工系首頁</a>
					</b></p>
				</div>
				<!-- <video autoplay loop muted playsinline src="images/banner.mp4"></video>-->
			</section>

		<!-- Highlights -->
			<section class="wrapper">
			<div class="inner">
			<?php
$btname = $_POST['btname'];
if($btname=="b1"){
	$btname="專題01";
}else if($btname=="b2"){
	$btname="專題02";
}else if($btname=="b3"){
	$btname="專題03";
}else if($btname=="b4"){
	$btname="專題04";
}else if($btname=="b5"){
	$btname="專題05";
}else if($btname=="b6"){
	$btname="專題06";
}else if($btname=="b7"){
	$btname="專題07";
}else if($btname=="b8"){
	$btname="專題08";
}else if($btname=="b9"){
	$btname="專題09";
}else if($btname=="b10"){
	$btname="專題10";
}else if($btname=="b11"){
	$btname="專題11";
}else if($btname=="b12"){
	$btname="專題012";
}else if($btname=="b13"){
	$btname="專題13";
}else if($btname=="b14"){
	$btname="專題14";
}else if($btname=="b15"){
	$btname="專題15";
}else if($btname=="b16"){
	$btname="專題16";
}else if($btname=="b17"){
	$btname="專題17";
}else if($btname=="b18"){
	$btname="專題18";
}else if($btname=="b19"){
	$btname="專題19";
}else if($btname=="b20"){
	$btname="專題20";
}else if($btname=="b21"){
	$btname="專題21";
}else if($btname=="b22"){
	$btname="專題22";
}else if($btname=="b23"){
	$btname="專題23";
}else if($btname=="b24"){
	$btname="專題24";
}else if($btname=="b25"){
	$btname="專題25";
}else if($btname=="b26"){
	$btname="專題26";
}else if($btname=="b27"){
	$btname="專題27";
}else if($btname=="b28"){
	$btname="專題28";
}else if($btname=="b29"){
	$btname="專題29";
}else if($btname=="b30"){
	$btname="專題30";
}else if($btname=="b31"){
	$btname="專題31";
}else if($btname=="b32"){
	$btname="專題32";
}else if($btname=="b33"){
	$btname="專題33";
}else if($btname=="b34"){
	$btname="專題34";
}else if($btname=="h1"){
	$btname="實習01";
}else if($btname=="h2"){
	$btname="實習02";
}else if($btname=="h3"){
	$btname="實習03";
}else if($btname=="h4"){
	$btname="實習04";
}else if($btname=="h5"){
	$btname="實習05";
}else if($btname=="h6"){
	$btname="實習06";
}else if($btname=="h7"){
	$btname="實習07";
}else if($btname=="h8"){
	$btname="實習08";
}else if($btname=="h9"){
	$btname="實習09";
}else if($btname=="h10"){
	$btname="實習10";
}else if($btname=="h11"){
	$btname="實習11";
}else if($btname=="h12"){
	$btname="實習12";
}else if($btname=="h13"){
	$btname="實習13";
}else if($btname=="h14"){
	$btname="實習14";
}else if($btname=="h15"){
	$btname="實習15";
}else if($btname=="h16"){
	$btname="實習16";
}else if($btname=="h17"){
	$btname="實習17";
}else if($btname=="h18"){
	$btname="實習18";
}else if($btname=="h19"){
	$btname="實習19";
}else if($btname=="h20"){
	$btname="實習20";
}else if($btname=="h21"){
	$btname="實習21";
}else if($btname=="h22"){
	$btname="實習22";
}else if($btname=="h23"){
	$btname="實習23";
}else if($btname=="h24"){
	$btname="實習24";
}else if($btname=="h25"){
	$btname="實習25";
}else if($btname=="h26"){
	$btname="實習26";
}else if($btname=="h27"){
	$btname="實習27";
}else if($btname=="h28"){
	$btname="實習28";
}else if($btname=="h29"){
	$btname="實習29";
}else if($btname=="h30"){
	$btname="實習30";
}
$file_path = "data/" . $btname . ".txt";
$inform = array();
if(file_exists($file_path)){
	$file_arr = file($file_path);
	foreach($file_arr as $value){
        array_push($inform, str_replace("\n","", $value));//[0]:IPaddress, [1]:Account, [2]:Password, [3]:DatebaseName, [4]:Key
	}
}
//print_r($inform);
$t1 = $inform[0];
$t2= $inform[1];
$t3 =  $inform[2];
$t4 =$inform[3];
$t5=$inform[4];
?>

<style>
#DIV_IMG{
	top:100px;
		left:50px;
			width:450px;
				height:200px;
					position:absolute;
					}

#DIV_W{
					    width:120px;
					        height:100px;
					            position:relative;
					                top:-120px;
					                    right:-800px;
}
</style>
<?php
	$filename = "data/" . $t1 . ".png";
	if(file_exists($filename)){
		echo "success.png";	
	}else{
		$filename = "data/" . $t1 . ".jpg";
		if(file_exists($filename)){
			echo "success.jpg";
		}else{
			$filename = "data/" . $t1 . ".jpeg";
			if(file_exists($filename)){
				echo "success.jpeg";
			}else{echo "fail to open";}
		}
	}
?>

                    	<h2>專題/實習作品詳細資料:<h2>
			<img style="width: 950px; height=750px; float: left;" src=<?php echo $filename;?>>
					<h3 ><font color=brown>位置(ex:專題01)</font></h3>
					<?php echo $t1;?>			                    														<h3 ><font color=brown>作品名稱</font></h3>
					      					<?php echo $t2;?>
					                    																												<h3 ><font color=brown>組員</font></h3>
					                    																																	<?php echo $t3;?>
					                    																																					<h3 ><font color=brown>指導老師</font></h3>
					                    																																										<?php echo $t4;?>
					                    																																														<h3 ><font color=brown>作品概述</font></h3>
					                    																																																			<?php echo $t5;?>

				<!--
					<header class="special">
						<h2>Sem turpis amet semper</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
				-->
				
				<!--</div>-->
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2></h2>
					<p></p>
				</div>
			</section>
		
		<!-- Testimonials -->
		<!--
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Faucibus consequat lorem</h2>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic01.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>
			-->
		<!-- Footer -->
		<!--
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Magna sed ipsum</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
					</div>
				</div>
			</footer>
	 	-->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
