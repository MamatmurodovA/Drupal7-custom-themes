<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php print $fields['nid']->content; ?>_faq" aria-expanded="true" aria-controls="collapseOne">
                    <?php print $fields['title']->content; ?> #1
                </a>
            </h4>
        </div>
        <div id="<?php print $fields['nid']->content; ?>_faq" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <?php print $fields['body']->content; ?>
            </div>
        </div>
    </div>
</div>