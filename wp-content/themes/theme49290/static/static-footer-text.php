<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
	© 2014 |
	<a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a>
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		More <a rel="nofollow" href="http://www.templatemonster.com/category/alternative-power-wordpress-themes/" target="_blank">Alternative Power WordPress Themes at TemplateMonster.com</a>
	<?php } ?>
</div>