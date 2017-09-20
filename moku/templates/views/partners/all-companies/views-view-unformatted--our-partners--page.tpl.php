<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div id="companies">
    <?php foreach ($rows as $id => $row): ?>
        <div class="content-item col-md-3 wow" >
            <?php print $row; ?>
        </div>
    <?php endforeach; ?>
</div>
