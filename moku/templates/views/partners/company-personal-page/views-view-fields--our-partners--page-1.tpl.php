<div class="company-item">
    <div class="company-picture">
        <?php print $fields['picture']->content; ?>
    </div>
    <?php if(isset($fields['field_company_description']->content)): ?>
        <div class="company_description">
<!--            <label>--><?php //print t('Company description');?><!--:</label>-->
                <?php print $fields['field_company_description']->content; ?>
        </div>
    <?php endif; ?>
    <div class="company_contacts">
        <?php if(isset($fields['field_phone_number']->content)): ?>
            <div class="phone">
                <label for=""><?php print t('Phone');?>:</label>
                <?php print $fields['field_phone_number']->content; ?>
            </div>

        <?php endif; ?>
<!--        --><?php //if(isset($fields['mail']->content)): ?>
<!--            <div class="email">-->
<!--                <label for="">--><?php //print t('Email');?><!--:</label>-->
<!--                --><?php //print $fields['mail']->content; ?>
<!--            </div>-->
<!--        --><?php //endif; ?>
        <?php if(isset($fields['field_company_address']->content)): ?>
            <div class="company_address">
                <label for=""><?php print t('Address');?>:</label>
                <?php print $fields['field_company_address']->content; ?>
            </div>
        <?php endif; ?>
     </div>

</div>
<div class="clearfix"></div>
<div class="company-sales-profile">
    <h2><?php print t("Company's sales"); ?></h2>
    <?php $uid = arg(1); ?>
    <?php print views_embed_view('discount_in_frontpage', 'block_3', $uid); ?>
</div>