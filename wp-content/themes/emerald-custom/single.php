<?php get_header(); ?>



	<div id="content">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>



			<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>



				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



				<p>

					<small>

						<b>posted</b>: <?php the_time('y F j') ?><br /><b>under</b>: <?php the_category(', ') ?>
<?php bookmarks (); ?>
						

					</small>

				</p>



			</div>

		</div>

	<?php comments_template(); ?>



	<?php endwhile; else: ?>



		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>



	</div>

	

<?php get_sidebar(); ?>



<?php get_footer(); ?>

