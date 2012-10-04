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

				<?php //while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'content', 'page' ); ?>
					<?php //comments_template( '', true ); ?>
				<?php //endwhile; // end of the loop. ?>
                
<div id="content">
    <div id="articulos" class="articulos_Index">
        <div id="articulo_top" class="articulo_top_Index">Ultimas Noticias</div>
        <div id="articulo_cont">
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo del Artículo</a></div>
                    <div class="articulo_resena">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 			Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                </div>
            </div>
            
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo de la Galería</a></div>
                    <div class="articulo_resena">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 			Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                </div>
            </div>
                
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo de la Cita</a></div>
                    <div class="articulo_resena">
                        <p>C'est en faisant n'importe quoi qu'on devient n'importe qui</p>
                    </div>
                </div>
            </div>
            
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo del Artículo</a></div>
                    <div class="articulo_resena">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 			Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                </div>
            </div>
            
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo de la Galería</a></div>
                    <div class="articulo_resena">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 			Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    </div>
                </div>
            </div>
                
            <div class="articulo_articulo">
                <div class="articulo_img">Imagen</div>
                <div class="articulo_cont">
                    <div class="articulo_datos">
                        <table>
                            <tr>
                                <td>Autor</td>
                                <td>Fecha de Publicación</td>
                            </tr>
                        </table>
                    </div>
                    <div class="articulo_titulo"><a href="#">Titulo de la Cita</a></div>
                    <div class="articulo_resena">
                        <p>C'est en faisant n'importe quoi qu'on devient n'importe qui</p>
                    </div>
                </div>
            </div>
            
            <div class="articulo_articulo"> paginacion </div>
            
            <br />
        </div>
    </div>
    <div id="menu_der">
        <?php get_sidebar(); ?>
    </div>
</div>
    



<?php get_footer(); ?>