<div class="content-item wow <?php print ($id % 2 == 0)? 'slideInRight' : 'slideInLeft'; ?>" data-id="<?php print $id; ?>">
    <div>
        <div class="content-item-img col-sm-5 col-xs-5" >
            <?php print $fields['field_pictures']->content; ?>
        </div>
        <div class="content-text col-sm-7 col-xs-7">
            <span class="new-content wow fadeIn" data-wow-delay="2s">New</span>
            <a href="<?php print url('node/'.$fields['nid']->content); ?>">
                <h3 class="content-item-title">
                    <?php print $fields['title']->content; ?>
                </h3>
            </a>
            <p class="content-item-text">
                <?php print strip_tags($fields['body']->content); ?>
            </p>
            <span class="content-item-sale"></span>
        <span class="content-item-sale-text">
            Скидка <?php print $fields['field_discount']->content; ?>
        </span>
            <a class="content-item-button" href="<?php print url('node/'.$fields['nid']->content); ?>">
                Подробнее
            </a>
        </div>
    </div>
</div>