<?php
/**
 * Template Name: Main Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

				
                
<div id="content">
    <div id="articulos" class="articulos_Index">
        <div id="articulo_top" class="articulo_top_Index">
        
        	<h2>Ultimas Publicaciones<h2>
        </div>
        
        <div id="articulo_cont">

        	<?php 
			$post = 0;
			while ( have_posts() ) : the_post();
				$myposts = get_posts('numberposts=-1&offset=$debut');
				foreach($myposts as $post):	
			?>
        
            <div class="articulo_articulo">
            
                <div class="articulo_img"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?></div>
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
                    
                    <div class="articulo_titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="articulo_resena">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                
            </div>
            	<?php endforeach; ?>
			<?php endwhile; ?>
            
            <div class="articulo_articulo">
            --
            
            <?php wp_pagenavi(); ?>
			            
			--
            </div>
            
            <br />
        </div>
    </div>
    <div id="menu_der">
        <?php get_sidebar(); ?>
    </div>
</div>
    



<?php get_footer(); ?>