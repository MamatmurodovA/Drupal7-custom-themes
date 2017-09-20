<?php if(isset($fields)): ?>
    <div class="col-sm-6 gallery__block">
        <a href="<?php print $fields['path']->content; ?>">
            <?php print $fields['field_image']->content; ?>
        </a>
    </div>
<?php endif; ?>