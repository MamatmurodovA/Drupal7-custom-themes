<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MOKU</title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <link rel="shortcut icon" href="/<?php print path_to_theme();?>/images/moku-fav-icon.png" type="image/png" />
	<!-- bootstrap CSS  -->
	<link href="/<?php print path_to_theme();?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="/<?php print path_to_theme();?>/css/bootstrap-theme.min.css" rel="stylesheet">

	<!--  owl  -->
	<link href="/<?php print path_to_theme();?>/css/owl.carousel.css" rel="stylesheet">
<!--	<link href="/--><?php //print path_to_theme();?><!--/css/jquery.countdownTimer.css" rel="stylesheet">-->

	<!--  animate  -->
	<link href="/<?php print path_to_theme();?>/css/animate.css" rel="stylesheet">

	<!--  CSS  -->
	<link href="/<?php print path_to_theme();?>/css/style.css" rel="stylesheet">
	<link href="/<?php print path_to_theme();?>/css/style_media.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/<?php print path_to_theme();?>/plugins/nprogress.css">
</head>
<body>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>

    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/wow.min.js"></script>
    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/jquery.countdownTimer.js"></script>
    <script type="text/javascript" src="/<?php print path_to_theme();?>/js/script.js"></script>
    <script  type="text/javascript" src="/<?php print path_to_theme();?>/plugins/nprogress.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            NProgress.start();
            NProgress.configure({ easing: 'ease', speed: 500 });
            NProgress.done();


        });

        function user_registration_redirect() {
            var form = $('#user-register-form');
            var action = $(form).attr('action');
            var redirect_page = action + '?destination=node/13';
            $(form).attr('action', redirect_page);
        }
        window.onload = user_registration_redirect;
    </script>
</body>
</html>