    <div class="content-item-img col-sm-5 col-xs-5" >
        <?php print $fields['picture']->content; ?>
    </div>
    <div class="content-text col-sm-7 col-xs-7">
        <a href="<?php print url('company/'.$fields['uid']->content); ?>">
            <h3 class="content-item-title">
                <?php print $fields['name']->content; ?>
            </h3>
        </a>
        <?php if(isset($fields['field_company_description']->content)): ?>
            <div class="content-item-text">
                    <?php print $fields['field_company_description']->content; ?>
            </div>
        <?php endif; ?>
    </div>
