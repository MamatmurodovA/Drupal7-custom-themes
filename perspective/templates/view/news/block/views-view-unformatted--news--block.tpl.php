<div class="lastNews">
    <h4 class="before"><?php print t('Latest news');?></h4>
    <div class="allNews">
        <a href="<?php print url('news'); ?>">
            <?php print t('All news');?> »
        </a>
    </div>
    <?php if (isset($rows)): ?>
        <div class="sliderNews owl-carousel">
            <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
