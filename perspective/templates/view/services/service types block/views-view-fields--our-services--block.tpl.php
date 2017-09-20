<?php if(isset($fields)):?>
    <div class="col-sm-3 services__block <?php print $fields['field_css_class']->content; ?>">
        <p><?php print $fields['name']->content; ?></p>
    </div>
<?php endif; ?>