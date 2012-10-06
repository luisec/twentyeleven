<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="content">
    <div id="articulos" class="articulos_Busqueda">
        <div id="articulo_top" class="articulo_top_Busqueda">
        	<h2><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?><h2>
        </div>
        <div id="articulo_cont">
        
        <?php if ( have_posts() ) : ?>
        	<?php while ( have_posts() ) : the_post(); ?>
            <div class="articulo_articulo">
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td><?php echo get_the_author(); ?></td>
                                <td>|</td>
                                <td><?php echo get_the_date(); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo">
                    	<a href="#"><?php the_title(); ?></a>
                    </div>
                    <div class="articulo_resena">
                        <?php the_excerpt();?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>   
		<?php else : ?>
            <p><?php _e( 'Nothing Found', 'twentyeleven' ); ?></p>
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
            
            <div class="articulo_articulo"><?php wp_pagenavi(); ?></div>
            
            <br />
        </div>
    </div>
    <div id="menu_der">
        <?php get_sidebar(); ?>
    </div>
</div>
