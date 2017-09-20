<div class="wrapper">
    <?php include_once INC_PATH.'header.inc'; ?>
    <div class="main">
        <div class="container">
            <?php include_once INC_PATH.'content_above.inc'; ?>
            <div class="content row">
                <div class="row <?php print str_replace('/', '-', $_GET['q']);?>">
                    <?php if(isset($node) && $node->type == 'discount'){?>

                    <?php }else{?>
                        <h3 class="not-front-title"><?php print $title; ?></h3>
                    <?php }?>
                    <?php print $messages; ?>
                    <?php print render($tabs);?>
                    <?php print render($page['content']);?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once INC_PATH.'footer.inc'; ?>
</div>