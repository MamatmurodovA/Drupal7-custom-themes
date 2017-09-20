<?php print views_embed_view('banner', 'block'); ?>
<?php $form = drupal_get_form('search_dst_form');  ?>

<div class="search row wow fadeIn">
    <?php print drupal_render($form);?>
</div>
