<div class="footer">
	<div class="footer-menu ">
		<div class="container">
			<div class="row">
				<?php print get_footer_menu(); ?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<p>© 2016  Moku.uz</p>
					<p>Все права защищены</p>
				</div>
				<div class="col-sm-4 col-xs-6">
					<p>OOO «Moku»</p>
					<p>100500, г. Ташкент, ул. Боровая, д.7, стр.7</p>
				</div>
				<div class="col-sm-2 col-xs-6">
					<p>Тел.:<span class="footer-telephone1"> (+99890) 585-92-92</span></p>
					<p class="footer-telephone2">(+99890) 585-93-93</p>
				</div>
				<div class="col-sm-3 dst-logo col-xs-6">
					<a href="#">
						<p class="col-sm-6 col-xs-6">Сайт разработан дизайн-студией</p>
						<div class="col-sm-6 col-xs-6">
							<img src="/<?php print path_to_theme();?>/images/datasite.png" />
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade login-block-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-content">
            <?php
                $block = module_invoke('user', 'block_view', 'login');
                print render($block['content']);

            ?>
        </div>
    </div>
</div>
<?php if(user_is_logged_in()): ?>

<?php else: ?>
    <div class="modal fade regsiter-block-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-content">
                <h3><?php print t('Sign in');?></h3>
                <?php
                $reg_form = drupal_get_form('user_register_form');
                print drupal_render($reg_form); ?>
            </div>
        </div>
    </div>
<?php endif; ?>