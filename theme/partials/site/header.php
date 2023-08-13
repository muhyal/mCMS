<!--begin::Head-->
	<head><base href=""/>
	<?php
	include './app/db-config.php';
	$conn = $conn->query("SELECT * FROM settings");
	$conn = mysqli_fetch_array($conn);
	?>
		<title><?php echo $conn['site_meta_title']; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $conn['site_meta_ description']; ?>" />
		<meta name="keywords" content="<?php echo $conn['site_meta_keywords']; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $conn['site_meta_title']; ?>" />
		<meta property="og:url" content="<?php echo $conn['site_url']; ?>" />
		<meta property="og:site_name" content="<?php echo $conn['site_meta_title']; ?>" />
		<link rel="canonical" href="<?php echo $conn['site_url']; ?>" />
		<link rel="shortcut icon" href="theme/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="theme/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="theme/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
