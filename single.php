<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


<div id="content">
	<?php while ( have_posts() ) : the_post(); ?>
    
    
    <div id="articulos" class="articulos_single">
        <div id="articulo_top" class="articulo_top_Single">

        	<h2><?php the_title(); ?><h2>
			<div class="articulo_datos">
                <table>
                    <tr>
                        <td><?php echo get_the_author(); ?></td>
                        <td>|</td>
                        <td><?php echo get_the_date(); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="articulo_cont">
        
            <div class="articulo_articulo">
                <?php get_template_part( 'content', 'single' ); ?>
            </div>
            
            <div class="articulo_nav">
            	<?php _e( 'Post navigation', 'twentyeleven' ); ?>
				<?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?>
				<?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
            </div>
            
            <div class="articulo_articulo"><hr /></div>
            <?php if ( comments_open() && ! post_password_required() ) : ?>
            <div class="articulo_Comments"><?php comments_template( '', true ); ?></div>
			<?php endif ?>

            <br />
        </div>
    </div>
    <?php endwhile; // end of the loop. ?>
    
    <div id="menu_der">
        <?php get_sidebar(); ?>
    </div>
    
</div>

<?php get_footer(); ?>