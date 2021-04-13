
<div class="container toys">
	<h2 class="subtitle"><?php the_title(); ?></h2>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mir' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mir' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->
			<h2 class="subtitle">Возможно вас заинтересует</h2>
			<div class="toys__wrapper">
				<?php 
					$posts = get_posts( array(
						'numberposts' => 3,
						'category_name'    => 'toys',
						'orderby'     => 'date',
						'order'       => 'ASC',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );
					
					foreach( $posts as $post ){
						setup_postdata($post);
				?>
					<div class="toys__item" style="background-image: url(
						<?php 
							if(has_post_thumbnail()) {
								the_post_thumbnail_url();
							}else {
								echo get_template_directory_uri() . '/assets/img/not-found.jpg';
							}
								
						?>)">
						<div class="toys__item-info">
							<div class="toys__item-title"><?php the_title(); ?></div>
							<div class="toys__item-descr">
								<?php the_field('toys_descr'); ?>                            
							</div>
							<a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
						</div>
					</div>
				<?php 
					}
				?>
			</div>
</div>
