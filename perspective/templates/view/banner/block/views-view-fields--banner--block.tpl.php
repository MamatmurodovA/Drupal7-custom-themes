<?php if(isset($fields)): ?>
    <div class="item">
        <?php print $fields['field_image']->content; ?>
        <div class="overlay">
            <div class="container">
                <div class="caption">
                    <h3><?php print $fields['title']->content; ?></h3>
                    <p><?php print strip_tags($fields['body']->content); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>