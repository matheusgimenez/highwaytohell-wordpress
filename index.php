<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
get_header(); ?>
   <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-12 columns">
	   <div class="row">
        <div class="large-12 columns">
        
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
<hr />
<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;width=280&amp;height=80&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;send=true&amp;appId=452517464807556" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:80px;" allowTransparency="true"></iframe>
<div class="conteudo1"><?php the_content();?></div>
			<?php endwhile; ?>
<?php post_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
    </div>
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
  </div>
  </div>