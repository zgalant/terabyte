<?php
/**
 * @package WordPress
 * @subpackage AppMagic
 */

get_header(); ?>
	
	
	<div id="content">
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		
			<div class="post" id="post-<?php the_ID(); ?>">
				<small class="post-info"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				
				<div id="comwrap">
					<?php comments_template(); ?>
				</div>
			</div><!-- e: post -->
			
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>

			<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center">Nothing to see here, sorry.</p>
			<?php get_search_form(); ?>

			<?php endif; ?>
			
		</div><!-- e: content -->
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
