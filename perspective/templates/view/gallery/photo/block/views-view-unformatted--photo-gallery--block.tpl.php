<div class="caption">
    <h3><?php print t('Photo gallery');?></h3>
    <?php print l(t('More photos @symbol', array('@symbol' => '»')), 'gallery/photo'); ?>
</div>
<?php if(isset($rows)): ?>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
