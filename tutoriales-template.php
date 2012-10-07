<?php
/**
 * Template Name: Tutoriales Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

				
                
<div id="content">
    <div id="articulos" class="articulos_Tuturiales">
        <div id="articulo_top" class="articulo_top_Tutoriales"><h2>Ultimas Publicaciones | Tutoriales<h2></div>
        <div id="articulo_cont">
        	<?php while ( have_posts() ) : the_post(); ?>
				
        
            <div class="articulo_articulo">
            
                <div class="articulo_img">
                	<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
                </div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td><?php echo $author = get_the_author(); ?></td>
                                <td>|</td>
                                <td><?php echo get_the_date(); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo">
                    	<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </div>
                    <div class="articulo_resena">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                
            </div>
            <?php endwhile; // end of the loop. ?>
            <div class="articulo_articulo"><?php wp_pagenavi(); ?></div>
            
            <br />
        </div>
    </div>
    <div id="menu_der">
        <?php get_sidebar(); ?>
    </div>
</div>    



<?php get_footer(); ?>