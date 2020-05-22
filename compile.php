<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
?>
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
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
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
					<header class="special">
						<h2>請確認您所填寫的展位是否正確,<br>
						目前所編輯的展位為- <?php echo'<b> "' .$btname . '" </b>';?>位置,確認無誤後請繼續進行編輯</h2>
					</header>
				<html>
					<head>
						<title>編輯展場</title>
					</head>
					<body>
						<form action="update.php" method="post" enctype="multipart/form-data">
							<div><br><br>
								<input type="hidden" name="team" value= <?php echo $btname; ?>>
								<label for="name">請輸入專題/實習作品名稱:</label>
								<input type="text" name="projname">
							</div>
							<div><br>
								<label for="name">組員名稱(ex: 吳同學/黃同學)</label> 
								<input type="text" name="name">
							</div>
							<div><br>
								<label for="name">指導教授</label>
								<input type="text" name="tname">
							</div><br>
							      <div>
								<label for="message">專題/實習成品功能概述:</label>
								<textarea name="message" id="message" cols="60" rows="20" placeholder="請輸入敘述"></textarea>
							</div>
							   	<br><br><br>
								上傳海報:
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="file" id="file" name="file" accept="image/gif, image/jpeg, image/png"/ >
								<!--<img id="preview_progressbarTW_img" src="#"/>-->
	                       				        <br><br><br><br>
							<div>
								<button type="submit">送出表單</button>
							</div>
						</form>
					</body>
				</html>
				</div>
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
