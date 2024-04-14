<?php

defined('Title') || define('Title', 'How to confirm the authenticity of the photo of Baqi cemetery');
defined('SubTitle') || define('SubTitle', 'My main problem was how to verify the authenticity of this photo?');


?>
<!DOCTYPE html>
<html dir="ltr">

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
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>
	<link rel="stylesheet" href="css/bootstrap.rtl.min.css" />
	<link rel="stylesheet" href="css/IRANSans_FaNum/css/fontiran.css" />
	<style>
		/* تغییر رنگ در وضعیت hover */
		.svg-hover:hover {
			fill: red;
			/* تغییر رنگ به قرمز */
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
	});
</script>

</html>