<div class="sliderItem">
    <div class="sliderImg">
        <?php print $fields['field_image']->content; ?>
    </div>
    <div class="text_slider">
        <strong><?php print $fields['title']->content; ?></strong>
        <data><?php print t('Posted');?> <?php print $fields['created']->content; ?></data>
        <p>
            <?php print $fields['body']->content; ?>
        </p>
    </div>
    <div class="more">
        <a href="<?php print $fields['path']->content; ?>"><?php print t('More'); ?> »</a>
    </div>
</div>