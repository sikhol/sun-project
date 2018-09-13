<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Toko Batik </title>

	<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/ninja-slider.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Roboto') ?>" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?php echo base_url('assets/js/jque.js') ?> "></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<link href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<style type="text/css">
	img#zoom {
		width: 350px;
		height: 200px;
		-webkit-transition: all .2s ease-in-out;
		-moz-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
		-ms-transition: all .2s ease-in-out;
	}
	.transisi {
		-webkit-transform: scale(1.8);
		-moz-transform: scale(1.8);
		-o-transform: scale(1.8);
		transform: scale(1.8);
	}
</style>
</head>
<body>
	<div id="header">

		<div class="container">
			<div id="logo-bks">
				<img id="img-logo" src="<?php echo base_url(); ?>assets/images/logo.png">
			</div>
			<nav id="nav-batik" class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="index.html"><span class="glyphicon glyphicon-home" style="margin-right: 5px;"></span>Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#product">Product</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</nav>
				

				<h1 id="head-text">
					RAJUTAN <br> BERKUALTAS
				</h1>
				<p style="color: #fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<a href="index.html#about"><button id="rm-head">READ MORE</button></a>
			</div>
		</div>
		<div class="container">
			<div id="about">
				<div class="col-sm-4">
					<div class="img-about">
						<img src="<?php echo base_url(); ?>assets/images/cms_1.8.png">
						<?php foreach ($ongkir as $u) : ?>
							<h4 class="sub-jdl-about"><?php echo $u['judul']; ?></h4>
							<p class="p-about"><?php echo $u['deskripsi']; ?></p>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="img-about">
						<img src="<?php echo base_url(); ?>assets/images/cms_1.9.png">
						
						<?php foreach ($garansi as $u) : ?>
							<h4 class="sub-jdl-about"><?php echo $u['judul']; ?></h4>
							<p class="p-about"><?php echo $u['deskripsi']; ?></p>
						<?php endforeach; ?>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="img-about">
						<img src="<?php echo base_url(); ?>assets/images/cms_1.10.png">
						<?php foreach ($online as $u) : ?>
							<h4 class="sub-jdl-about"><?php echo $u['judul']; ?></h4>
							<p class="p-about"><?php echo $u['deskripsi']; ?></p>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div id="product">
				<h2 class="jdl-segment">Featured Products</h2>
				<p class="p-about">Etiam dapibus, arcu eget efficitur ultricies, nisi urna bibendum felis, laoreet posuere justo risus vel sem.estibulum sit amet eleifend nulla. </p>
				<div id="wrap-product">
						<div align="center" style="margin-bottom:50px">
				<button class="filter-button" data-filter="all">All</button>
				<button class="filter-button" data-filter="category1">Designing</button>
				<button class="filter-button" data-filter="category2">Development</button>
				<button class="filter-button" data-filter="category3">Graphics</button>
			</div>
					<div class="col-sm-12" id="produk">


					</div>
					<div class="col-sm-12" id="pagination_link">
						<ul class="pagination pagination-lg pag-pro">

							<!-- <li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<div id="contact">
				<h2 class="jdl-segment">Contact Us</h2>
				<div class="grs">
				</div>
				<div class="col-sm-9">
					<?php echo validation_errors(); ?>

					<?php echo form_open(base_url('batik/create'));  $site_key = '6LfbrFsUAAAAAGPzDoAIvGtHocBli24SUm1dvgXG'; // Diisi dengan site_key API Google reCapthca yang sobat miliki?>


					<div id="form-wrap" class="col-sm-12" style="margin-bottom: 40px">
						<div class="col-sm-4">
							<input type="text" name="nama" class="form-text" placeholder="Name" required>
						</div>
						<div class="col-sm-4">
							<input type="email" name="email" class="form-text" placeholder="Email">
						</div>
						<div class="col-sm-4">
							<input type="text" name="subject" class="form-text" placeholder="Subject">
						</div>
					</div>
					<div class="col-sm-12" style="margin-bottom: 40px">
						<div class="col-sm-12">
							<textarea id="textarea-form" placeholder="Text" name="text"></textarea>
						</div>
					</div>
					<div class="col-sm-12" style="margin-bottom: 40px;padding-left: 30px">
						<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
					</div>
					<div class="col-sm-12" >
						<div class="col-sm-12" id="btn-wrap">
							<button type="submit" id="kirim"><span style="margin-right: 5px;color: #0CB594" class="glyphicon glyphicon-envelope"></span>Send Message</button>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
				<div class="col-sm-3" id="alamat">
					<h4 style="font-family: 'Roboto', sans-serif;font-weight: bold;color: #555;margin-top: 0px">
						Kunjungi Toko Kami
					</h4>
					<p class="p-about">
						Jl. Raya Kaliurang KM. 5, Sleman,<br>
						Yogyakarta
					</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div id="logo-bks">
					<img id="img-logo-foot" src="<?php echo base_url(); ?>assets/images/logo.png">
					<!-- <p class="p-about" style="margin-top:10px;color: #fff;margin-right: auto;margin-left: auto;" >
						Batik Berkualitas. Kualitas Ekspor. Dijamin Anda tidak kecewa. Garansi Uang Kembali
					</p> -->
				</div>
				<div class="col-sm-12" id="copy">
					<div class="col-sm-6 col-xs-12">
						<div id="copy-right" class="col-sm-12">
							<h4 style="color:#fff;font-family: sans-serif;">2018 &copy Rajut. All Rights Reserved</h4>
						</div>

					</div>
					<div class="col-sm-6 col-xs-12">
						<div id="copy-left" class="col-sm-12">
							<a href="#">
								<i class="fa fa-facebook-square"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter-square"></i>
							</a>
							<a href="#">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			var start=0;
			function load_country_data(page) {
				$.ajax({
					url:"<?php echo base_url(); ?>batik/pagination/"+page,
					method:"GET",
					dataType:"json",
					success:function(data) {
						$('#produk').html(data.data_produk);
						$('#pagination_link').html(data.pagination_link);
					}
				});
			}

			load_country_data(0);
			$(document).ready(function(){
				$(document).on("click", ".pagination li a", function(event){
					event.preventDefault();
					var page = $(this).attr("href");
					var res = page.split("/");
					start = res[5];
					load_country_data(start);
				});
			});
			//image slide
			function lightbox(idx) {
				var ninjaSldr = document.getElementById("ninja-slider");
				ninjaSldr.style.display = "block";

				nslider.init(idx);
				var fsBtn = document.getElementById("fsBtn");
				fsBtn.click();
			}

	        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
	        	if (isFullscreen) {
	        		ninjaSldr.style.display = "none";

	        	}

	        }
	    </script>
	     <script>

	$(document).ready(function(){

		$(".filter-button").click(function(){
			var value = $(this).attr('data-filter');

			if(value == "all")
			{
				$('.filter').show('1000');
			}
			else
			{
				$(".filter").not('.'+value).hide('3000');
				$('.filter').filter('.'+value).show('3000');

			}

			if ($(".filter-button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");
		});
	});
	/*	end gallery */

	$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});
	});


</script>
	</body>
	</html>
