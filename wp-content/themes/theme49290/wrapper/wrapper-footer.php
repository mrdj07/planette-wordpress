<?php /* Wrapper Name: Footer */ ?>
<div class="row footer-widgets">
	<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar"); ?>
	</div>
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
	<div class="span12 social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
		<?php get_template_part("static/static-social-networks"); ?>
	</div>
</div>
<div class="row copyright">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
</div>