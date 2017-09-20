<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
$uid = arg(1);
$profile = user_load($uid);
global $user;
?>
<style >
    /* custom inclusion of right, left and below tabs */

    .tabs-below > .nav-tabs,
    .tabs-right > .nav-tabs,
    .tabs-left > .nav-tabs {
        border-bottom: 0;
    }

    .tab-content > .tab-pane,
    .pill-content > .pill-pane {
        display: none;
    }

    .tab-content > .active,
    .pill-content > .active {
        display: block;
    }

    .tabs-below > .nav-tabs {
        border-top: 1px solid #ddd;
    }

    .tabs-below > .nav-tabs > li {
        margin-top: -1px;
        margin-bottom: 0;
    }

    .tabs-below > .nav-tabs > li > a {
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .tabs-below > .nav-tabs > li > a:hover,
    .tabs-below > .nav-tabs > li > a:focus {
        border-top-color: #ddd;
        border-bottom-color: transparent;
    }

    .tabs-below > .nav-tabs > .active > a,
    .tabs-below > .nav-tabs > .active > a:hover,
    .tabs-below > .nav-tabs > .active > a:focus {
        border-color: transparent #ddd #ddd #ddd;
    }

    .tabs-left > .nav-tabs > li,
    .tabs-right > .nav-tabs > li {
        float: none;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-right > .nav-tabs > li > a {
        min-width: 74px;
        margin-right: 0;
        margin-bottom: 3px;
    }

    .tabs-left > .nav-tabs {
        float: left;
        margin-right: 19px;
        border-right: 1px solid #ddd;
    }

    .tabs-left > .nav-tabs > li > a {
        margin-right: -1px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .tabs-left > .nav-tabs > li > a:hover,
    .tabs-left > .nav-tabs > li > a:focus {
        border-color: #eeeeee #dddddd #eeeeee #eeeeee;
    }

    .tabs-left > .nav-tabs .active > a,
    .tabs-left > .nav-tabs .active > a:hover,
    .tabs-left > .nav-tabs .active > a:focus {
        border-color: #ddd transparent #ddd #ddd;
        *border-right-color: #ffffff;
    }

    .tabs-right > .nav-tabs {
        float: right;
        margin-left: 19px;
        border-left: 1px solid #ddd;
    }

    .tabs-right > .nav-tabs > li > a {
        margin-left: -1px;
        -webkit-border-radius: 0 4px 4px 0;
        -moz-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
    }

    .tabs-right > .nav-tabs > li > a:hover,
    .tabs-right > .nav-tabs > li > a:focus {
        border-color: #eeeeee #eeeeee #eeeeee #dddddd;
    }

    .tabs-right > .nav-tabs .active > a,
    .tabs-right > .nav-tabs .active > a:hover,
    .tabs-right > .nav-tabs .active > a:focus {
        border-color: #ddd #ddd #ddd transparent;
        *border-left-color: #ffffff;
    }

</style>
<div class="profile"<?php print $attributes; ?>>
    <?php if (in_array('Company', $profile->roles)){ ?>
            <a class="btn btn-primary " href="<?php print url('company/sales/' . $profile->uid); ?>"><?php print t("Company's all sales"); ?></a>

        <?php if($user->uid == $profile->uid){?>
            <a class="btn btn-primary " href="<?php print url('node/add/discount'); ?>">
                <?php  print t('Add discount');?>
            </a>
        <?php }?>
        <hr>
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#a" data-toggle="tab">Two</a></li>
                <li>
                    <a href="#b" data-toggle="tab">One</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="a">
                    <?php print render($user_profile);  ?>
                </div>
                <div class="tab-pane" id="b">
                    Test
                </div>
            </div>
        </div>
    <?php }else{ ?>

        <?php $history = get_user_discounts($profile->uid); ?>
        <?php foreach ($history as $item){?>
            <div id="discount_id">
                <label><?php echo t('Discount id');?>:</label>
                <span><?php echo $item->discount_id; ?></span>
            </div>
            <div id="discount_code">
                <label><?php echo t('Discount code');?>:</label>
                <span><?php echo $item->discount_code; ?></span>
            </div>
            <div id="discount_created">
                <label><?php echo t('Discount request date');?>:</label>
                <span><?php echo date("Y/m/d, H:i",$item->created); ?></span>
            </div>
        <?php }?>
    <?php } ?>
</div>
