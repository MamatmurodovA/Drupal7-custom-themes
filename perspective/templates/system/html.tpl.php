<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title><?php print $head_title; ?></title>
    <?php print $scripts; ?>
    <?php print $styles; ?>
    <link rel="stylesheet" href="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/css/style.css">
</head>
<body>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

<script src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/js/jquery-3.2.1.min.js"></script>
<script src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/js/jquery.easing.1.3.js"></script>
<script src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/js/bootstrap.min.js"></script>
<script src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/js/owl.carousel.min.js"></script>
<script src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/js/build.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#language-block').children('language-switcher-locale-url').addClass('language');
    });
</script>
</body>
</html>