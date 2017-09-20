<?php if (isset($rows)): ?>
<section class="services">
    <div class="container">
        <h3><?php print t('Our services'); ?></h3>
        <h4><?php print t('Repair of premises of all types'); ?></h4>
        <div class="services__caption-after">
            <span></span>
            <span class="disabled"></span>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
