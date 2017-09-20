<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php if (isset($rows)): ?>
    <section class="page-carousel owl-carousel">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </section>
<?php endif;?>
