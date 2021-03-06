<?php /* Loop Name: Single */ ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
	// The following determines what the post format is and shows the correct file accordingly
	$format = get_post_format();
	get_template_part( 'includes/post-formats/'.$format );
	if($format == ''): ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
			<?php if(!is_singular()) : ?>
				<header class="post-header">
					<?php if(is_sticky()) : ?>
						<h5 class="post-label"><?php echo theme_locals("featured");?></h5>
					<?php endif; ?>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</header>
			<?php endif; ?>
			<?php get_template_part('includes/post-formats/post-thumb'); ?>

			<?php if ( !is_singular() ) : ?>
				<!-- Post Content -->
				<div class="post_content">
					<?php
					if (of_get_option('post_excerpt')=="true" || of_get_option('post_excerpt')=='') { ?>
						<div class="excerpt">
							<?php

							if (has_excerpt()) {
								the_excerpt();
							} else {
								if (!is_search()) {
									$content = get_the_content();
									echo apply_filters( 'cherry_standard_post_content_list', wp_trim_words( $content, 55 ) );
								} else {
									$excerpt = get_the_excerpt();
									echo apply_filters( 'cherry_standard_post_content_search', wp_trim_words( $excerpt, 55 ) );
								}
							} ?>
						</div>
					<?php }
					$button_text = of_get_option('blog_button_text') ? apply_filters( 'cherry_text_translate', of_get_option('blog_button_text'), 'blog_button_text' ) : theme_locals("read_more") ;
					?>
					<a href="<?php the_permalink() ?>" class="btn btn-primary"><?php echo $button_text; ?></a>
					<div class="clear"></div>
				</div>

			<?php else :?>
				<?php
				$ingredients = get_field('ingredients');
				$fragrance = get_field('fragrance');
				$punchlines = is_string(get_field('punch_lines')) ? array() : get_field('punch_lines');
				$first_row_class = count($punchlines) > 0 ? 'span8' : 'span12';
				?>
				<!-- Post Content -->
				<div class="post_content">
					<div class="row">
						<div class="<?php echo $first_row_class; ?>">
							<?php the_content(''); ?>
						</div>
						<?php if(count($punchlines) > 0) : ?>
						<div class="span4 featured">
							<div>
								<ul>
									<?php foreach($punchlines as $p): ?>
										<li><?php echo $p; ?></li>
									<?php endforeach; ?>
								</ul>
							</div>

						</div>
						<?php endif; ?>
					</div>

					<div class="clear"></div>
					<a href="#" class="open-instructions" title="Cliquez pour ouvrir les instructions">Instructions</a>
					<div class="produit-instructions">
						<?php the_field('instructions'); ?>
					</div>
					<hr/>
					<ul>
						<li><strong>Format: </strong><?php the_field('format'); ?></li>
						<li><strong>Prix Sugg&eacute;r&eacute;: </strong><?php the_field('prix_suggere'); ?></li>
						<?php if(!empty($fragrance)): ?><li><strong>Fragrance: </strong><?php echo $fragrance; ?></li><?php endif; ?>
					</ul>
					<?php ?>
					<?php if(!empty($ingredients)): ?>
						<h4>Ingr&eacute;dients</h4>
						<ul>
							<?php foreach ($ingredients as $item) { ?>
								<li class="produits-list"><a href="<?php echo get_permalink($item); ?>"><?php echo $item->post_title; ?></a></li>
							<?php } ?>
						</ul>
					<?php endif; ?>

				</div>
				<!-- //Post Content -->
			<?php endif; ?>

			<?php get_template_part('includes/post-formats/post-meta'); ?>

		</article>
		<?php endif;

	get_template_part( 'includes/post-formats/share-buttons' );
	wp_link_pages('before=<div class="pagination">&after=</div>');
?>
	<script>
		$(document).ready(function(){
			$('.open-instructions').click(function(e){
				e.preventDefault();
				$(this).toggleClass('active')
				$(this).next('.produit-instructions').slideToggle();
			})
		})
	</script>

<?php
	//get_template_part( 'includes/post-formats/related-posts' );
	//comments_template('', true);
	endwhile; endif; 
?>