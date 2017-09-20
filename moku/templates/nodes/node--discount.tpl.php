<?php global $user;
    try{
        $author_id = $node->field_user['und'][0]['target_id'];
    }
    catch(Exception $e){
        $author_id = $node->uid;
    }

?>
<link href="/<?php print drupal_get_path('theme', 'moku'); ?>/plugins/countdown_clock.css" rel="stylesheet"/>
<script src="/<?php print drupal_get_path('theme', 'moku'); ?>/plugins/countdown_clock.js"></script>
<div class="more-details">
    <div class="for-more-info">
        <div class="col-xs-6">
            <div class="details-carousel owl-carousel">
                    <?php if(isset($node->field_pictures['und'])){ ?>
                        <?php foreach ($node->field_pictures['und'] as $img){?>
                            <div class="details-item" data-dot='<img src="<?php print file_create_url($img['uri'])?>">'>
                                <img src="<?php print file_create_url($img['uri'])?>">
                            </div>
                        <?php }?>
                    <?php } ?>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="details-info">
                <span class="for-new">New</span>
                <h3 class="details-title">
                    <?php print $node->title;?>
                </h3>
                <p>
                    <?php print (isset($node->body['und']))? $node->body['und'][0]['value'] : '';?>
                </p>
                <span class="details-item-sale">sale</span>
                <span class="details-item-sale-text">Скидка
                    <?php print $node->field_discount['und'][0]['value'];?>%
                </span>
                <div class="for-detail-time">

                    <div class="get-discount">
                        <a class="details-item-button yellow-button" href="#" data-toggle="modal" data-target="#myModal">
                            Получить скидку
                        </a>
                    </div>
                    <span>До конца продаж осталось:</span>

                    <script type="text/javascript">
                        function CDT(){

                            var tl = new Date("<?php print date("Y/m/d/ H:i", (isset($node->field_end_date['und'][0]['value']))? $node->field_end_date['und'][0]['value'] : ''); ?>");

                            var timer = new CountdownTimer('CDT', tl, '<span class="number-wrapper"><div class="line"></div><span class="number end">' + "<?php print t('Time is up');?>" + '</span></span>',
                                {
                                    'days' : "<?php print t('Days');?>",
                                    'hours': "<?php print t('Hours');?>",
                                    'minutes': "<?php print t('Mins');?>",
                                    'seconds': "<?php print t('Secs');?>"
                                });
                            timer.countDown();
                        }
                        window.onload = function(){
                            CDT();
                        };

                        jQuery(function(){
                            var left_date = '<?php print date("Y/m/d/ H:i:s", (isset($node->field_end_date['und'][0]['value']))? $node->field_end_date['und'][0]['value'] : ''); ?>';
                            jQuery("#future_date").countdowntimer({
                                dateAndTime : left_date,
                                size : "lg",
                                regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
                                regexpReplaceWith: "$1<sup>дней</sup> : $2<sup>часов</sup> : $3<sup>минут</sup> : $4<sup>секунд</sup>"
                            });
                        });
                    </script>
                    <div id="countdowntimer"><span id="future_date"><span></div>
                    <div class="">
                        <div id="CDT"></div>
                    </div>
                </div>
                <div>
                    <div class="about-company">
                        <?php if($company = user_load($node->uid)){ ?>
                        <a href="<?php print url('company/' . $node->uid); ?>">
                            <div class="col-md-3 col-xs-3 company-image">
                                <?php if(isset($company->picture->uri)){ ?>
                                    <img style="width: 100px; height: 100px;" src="<?php print file_create_url($company->picture->uri); ?>" />
                                <?php }else{?>
                                    <img style="width: 100px; height: 100px;" src="<?php print variable_get('user_picture_default')?>" />
                                <?php }?>
                            </div>
                            <div class=" col-md-9 col-xs-9 company-address">
                                <label>
                                    <?php print t('Address'); ?>:
                                </label>
                                <?php if(isset($company->field_company_address['und'][0]['value'])) { ?>
                                    <span>
                                        <?php print $company->field_company_address['und'][0]['value']; ?>
                                    </span>
                                <?php } ?>
                                <div class="company-phone">
                                    <label>
                                        <?php print t('Phone');?>:
                                    </label>
                                    <?php if(isset($company->field_phone_number['und'][0]['value'])) { ?>
                                        <span>
                                        <?php print $company->field_phone_number['und'][0]['value']; ?>
                                    </span>
                                    <?php } ?>
                                </div>
                            </div>
                        </a>
                        <?php }else{?>
                            <?php print t('Company does not exist');?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="for-comment">
            <div class="comment-added-text">
                <?php print get_node_comments($node->nid); ?>
            </div>
            <div class="comment-fields">
                <?php
                    if( user_is_logged_in())
                    {
                        $comment = new stdClass;
                        $comment->nid = $node->nid;
                        $form = drupal_get_form('comment_form', $comment);
                        print drupal_render($form);
                    }else
                    {
                        print l(t('Please log in to leave a comment.'), 'user', array('attributes' => array('class' => array('btn', 'btn-default'))));
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h3 style="margin-top: 0;margin-bottom: 20px">Похожие Скидки</h3>
        <?php print views_embed_view('discount_in_frontpage', 'block_2'); ?>
    </div>
</div>
<style type="text/css">
    .company-image img {
        width: 100% !important;
        height: auto !important;
    }
</style>

<!-- Modal -->
<div class="discount_up-modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php if(user_is_logged_in()): ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        <?php echo $node->title; ?>
                    </h4>
                </div>
                <div id="response_info">
                        <div></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo t('Close');?></button>
                    <button type="button" class="btn btn-primary" id="get-discount" >
                        <div id="details" hidden data-api="<?php print url('api/item/').$node->nid; ?>">
                            <div class="user_id" data-uid="<?php echo $user->uid;?>"></div>
                            <div class="product_id" data-product_id="<?php echo $node->nid; ?>"></div>
                        </div>
                        <?php echo t('Get discount');?></button>
                </div>
            <?php else: ?>
                <div class="modal-content text-center" style="height: 30px;">
                    <?php echo  l(t('Please log in to get a discount.'), 'user');?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
