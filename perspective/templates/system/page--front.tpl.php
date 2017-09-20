<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-7 col-sm-5">
                <div class="search">
                    <?php $search_block = get_block('search', 'form'); ?>
                    <?php print render($search_block); ?>
                </div>
                <ul class="language">
                    <li><a class="arab" href="#">Arab</a></li>
                    <li><a class="chi" href="#">China</a></li>
                    <li><a class="en" href="#">English</a></li>
                    <li><a class="ru" href="#">Русский</a></li>
                </ul>
                <div class="phone">
                    <?php $header_contact_block = get_block('block', 1); ?>
                    <?php print render($header_contact_block); ?>
                </div>
            </div>
        </div>
    </div>
    <nav class="page-navigation navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#page-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php print $front_page; ?>">
                    <img src="<?php print $logo; ?>" alt="logo">
                    <h2><?php print $site_slogan; ?></h2>
                </a>
            </div>
            <?php print main_menu(); ?>
        </div>
    </nav>
</header>
<?php $banner_views_block = get_block('views', 'banner-block'); ?>
<?php print render($banner_views_block); ?>

<?php $service_types_views_block = get_block('views', 'our_services-block'); ?>
<?php print render($service_types_views_block); ?>

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 about-company">
                <div class="img-container">
                    <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/photo.png" alt="photo">
                </div>
                <?php
                    switch (get_lang()):
                        case 'ru':
                            $about_company_id = 6;
                        break;
                        default:
                            $about_company_id = 6;
                        break;
                    endswitch;
                    $about_company = node_load($about_company_id);
                ?>
                <div class="about-company__content">
                    <h3><?php print $about_company->title; ?></h3>
                    <div>
                        <?php print $about_company->body['und'][0]['value']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 gallery">
                <?php $gallery_block = get_block('views', 'photo_gallery-block'); ?>
                <?php print render($gallery_block); ?>
            </div>
        </div>
    </div>
</section>
<div class="sliderForNews">
    <div class="container">
        <?php $news_block = get_block('views', 'news-block'); ?>
        <?php print render($news_block); ?>
    </div>
</div>
<div class="akbar">
    <div class="container">
        <div class="new_project_top">
            <a href="#">Все услуги »</a>
            <h2>Наши новые проекты</h2>
        </div>
        <div class="new-project owl-carousel">
            <div class="item">
                <a href="#" class="new_project_item">
                    <div class="new_project_img">
                        <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/services1.png" alt=""/>
                    </div>
                    <div class="new_project_text">
                        <h3>Строительство здания "Алока Банк" в г.Самарканд</h3>
                        <p>В 2016 году ООО “PERSPEKTIVA STROY INVEST”, являясь правопреемником СП ООО «Bektemir Temir Beton Maxsulotlari»,  отметило 21-летие своей деятельности.</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="new_project_item">
                    <div class="new_project_img">
                        <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/services2.png" alt=""/>
                    </div>
                    <div class="new_project_text">
                        <h3>Реконструкция международного аэропорта в г. Самарканд</h3>
                        <p>В 2016 году ООО “PERSPEKTIVA STROY INVEST”, являясь правопреемником СП ООО «Bektemir Temir Beton Maxsulotlari»,  отметило 21-летие своей деятельности.</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="new_project_item">
                    <div class="new_project_img">
                        <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/services3.png" alt=""/>
                    </div>
                    <div class="new_project_text">
                        <h3>"ЖИЛОЙ КОМПЛЕКС ПОВЫШЕННОЙ КОМФОРТНОСТИ"</h3>
                        <p>В 2016 году ООО “PERSPEKTIVA STROY INVEST”, являясь правопреемником СП ООО «Bektemir Temir Beton Maxsulotlari»,  отметило 21-летие своей деятельности.</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#" class="new_project_item">
                    <div class="new_project_img">
                        <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/services2.png" alt=""/>
                    </div>
                    <div class="new_project_text">
                        <h3>Реконструкция международного аэропорта в г. Самарканд</h3>
                        <p>В 2016 году ООО “PERSPEKTIVA STROY INVEST”, являясь правопреемником СП ООО «Bektemir Temir Beton Maxsulotlari»,  отметило 21-летие своей деятельности.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="footer-before">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 footer-before-item">
                <div class="footer-before-img">
                    <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/address.png" alt=""/>
                </div>
                <div class="footer-before-text">
                    <h4><?php print t('Address'); ?></h4>
                    <?php
                    switch (get_lang()):
                        case 'ru':
                            $address_block_id = 2;
                            break;
                        default:
                            $address_block_id = 2;
                            break;
                    endswitch;
                    $address_block = get_block('block', $address_block_id);
                    ?>
                    <p><?php print render($address_block); ?></p>
                </div>
            </div>
            <div class="col-sm-4 footer-before-item">
                <div class="footer-before-img">
                    <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/email.png" alt=""/>
                </div>
                <div class="footer-before-text">
                    <h4>EMAIL</h4>
                    <?php $email_block = get_block('block', 3); ?>
                    <p><?php print render($email_block); ?></p>
                </div>
            </div>
            <div class="col-sm-4 footer-before-item">
                <div class="footer-before-img">
                    <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/tel2.png" alt=""/>
                </div>
                <div class="footer-before-text">
                    <h4><?php print t('Phones');?></h4>
                    <?php $footer_phone_block = get_block('block', 4); ?>
                    <p><?php print render($footer_phone_block); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="footerBorder">
            <div class="col-md-4 copyright">
                <span>&copy; <?php print date("Y");?> -
                    <a href="<?php print $front_page; ?>">
                        <?php print $site_name; ?>
                    </a><br /><?php print t('All rights are reversed.')?>
                </span>
            </div>
            <div class="col-md-4 schetchik">
                <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/index.png">
            </div>
            <div class="col-md-4 author">
                <a href="http://datasite.uz" target="_blank" title="DataSite Technology">
                    <p><?php print t("Site developed by"); ?></p>
                    <img src="/<?php print THEME_PERSPECTIVE_SRC_ROOT; ?>/img/datasite.png">
                </a>
            </div>
        </div>
    </div>
</footer>