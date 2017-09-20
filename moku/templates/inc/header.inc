<div class="header">
    <div class="container">
        <div class="header-top row ?>">
            <div class="logo col-sm-6 col-sm-push-3 wow flip">
                <a href="<?php print $front_page; ?>">
                    <img src="<?php print $logo;?>"/>
                </a>
            </div>
            <div class="phone col-sm-3 col-sm-pull-6">
                <p class="wow bounceInLeft">(99890) 585 92 92</p>
            </div>
            <div class="register col-sm-3 <?php if(user_is_logged_in()){ print "login-user-ar";}?> wow bounceInRight">
                <?php if(user_is_logged_in()){ ?>
                    <a href="<?php print url('user');?>" class="entrance">
                        <p><?php print t('My profile');?></p>
                    </a>
                    <a href="<?php print url('user/logout');?>" class="registratsia">
                        <p><?php print t('Logout');?></p>
                    </a>
                <?php } else { ?>
                    <!-- <a href="// print url('user');?>" class="entrance col-sm-6 col-xs-6">
                        <p>// print t('Sign in');?></p>
                    </a>-->
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".login-block-form"><?php print t('Sign in');?></button>
                <!-- <a href="// print url('user/register');?>"  class="registratsia col-sm-6 col-xs-6">
                        <p>// print t('Sign up');?></p>
                    </a>-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".regsiter-block-form"><?php print t('Sign up');?></button>
                <?php }; ?>
            </div>
        </div>
        <div class="header-menu row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="top-menu">
                    <div class="row">
                        <div>
                            <?php print get_main_menu();?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>