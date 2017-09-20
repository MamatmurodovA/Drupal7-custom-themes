<?php print $fields['field_image']->content;?>
<div class="banner-text">
    <?php print htmlspecialchars_decode($fields['title']->content);?>
    <p><?php print $fields['body']->content;?></p>
    <a href="<?php print $fields['field_url']->content;?>">
        <?php print t('More');?>
    </a>
</div>