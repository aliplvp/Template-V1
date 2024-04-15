<?php

defined('Title') || define('Title', 'تاریخ حرم بقیع از تخریب تا امروز');
defined('SubTitle') || define('SubTitle', 'گفتگو با جناب آقای دکتر سیدعلی موجانی، یابنده تصویری که امروزه به نام حرم ائمه بقیع شناخته می شود و از پژوهشگران برتر و پرسابقه در عرصه بقیع پژوهی است');


?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<title><?php echo Title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.dropotron.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
	<link rel="stylesheet" href="css/bootstrap.rtl.min.css" />
	<link rel="stylesheet" href="css/IRANSans_FaNum/css/fontiran.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
	<style>
		/* تغییر رنگ در وضعیت hover */
		.svg-hover:hover {
			fill: red;
			/* تغییر رنگ به قرمز */
		}

		.cycle-slideshow {
			width: 100%;
			display: flex;
			flex-wrap: nowrap;
			overflow: hidden;
			justify-content: center;
		}

		.cycle-slideshow>div {
			flex: 0 0 auto;
		}

		.card {
			margin: 0 10px;
			width: 300px;
		}

		.card img {
			width: 100%;
			height: auto;
		}

		.img-hover {
			transition: filter 0.3s ease;
			/* اضافه کردن انیمیشن تغییر فیلتر */
		}

		.img-hover:hover {
			filter: hue-rotate(180deg);
			/* تغییر رنگ با فیلتر */
		}
	</style>

</head>


<body class="homepage">

	<!-- Header -->
	<div id="header">

		<!-- Inner -->
		<div class="inner">
			<header>
				<h1><a href="#" id="logo"><?php echo Title; ?></a></h1>
				<hr />
				<span class="byline"><?php echo SubTitle; ?></span>
			</header>
		</div>

		<?php include('nav.php') ?>

	</div>


	<?php include('carousel.php') ?>



	<?php include('main.php') ?>

	<?php include('footer.php') ?>


</body>

<script>
	$(document).ready(function() {
		$("#content_matn").each(function() {
			var text = $(this).text();
			var newText = text.replace(/\n/g, "<br>");
			$(this).html(newText);
		});

		var cardsData = [{
				title: "تاریخ حرم بقیع از تخریب تا امروز",
				image: "images/5401012.jpg",
				link: "https://aliplvp.ir/template/Persian/1"
			},
			{
				title: "چگونگی تایید اصالت عکس قبرستان بقیع",
				image: "images/resized_31788_593.jpg",
				link: "https://aliplvp.ir/template/Persian/2"
			},
			{
				title: "چگونگی الهام از نوع معماری و مناره",
				image: "images/714728_528.jpg",
				link: "https://aliplvp.ir/template/Persian/3"
			}
		];

		// ایجاد کارت‌ها و اضافه کردن به اسلایدر
		for (var i = 0; i < cardsData.length; i++) {
			var card = '<div class="card"><img src="' + cardsData[i].image + '" class="card-img-top" alt="عکس ' + i + '"><div class="card-body"><h5 class="card-title">' + cardsData[i].title + '</h5></div></div>';
			$('.cycle-slideshow').append(card);
		}

		// فعال کردن اسلایدر
		$('.cycle-slideshow').cycle();

	});
</script>

</html>