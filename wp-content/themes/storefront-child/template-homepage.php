<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>
<div id="contenidoSoportes">
    <div id="primary" class="content-area">
     <?php echo do_shortcode("[masterslider id='1']"); ?>
     <main id="main" class="site-main" role="main">
         <p class="section-title a-center">Últimos productos</p>
         <?php echo do_shortcode("[recent_products per_page='8' columns='4']"); ?>           

     </main><!-- #main -->
 </div><!-- #primary -->
 <div class="body-wrapper a-center why-us-wrapper">
    <div class="col c-m-16 a-center">
        <div class="why-us clearfix">
            <div class="why-us-inner col c-m-16">
                <figure class="w-u-l col c-m-5">
                    <img src="<?php bloginfo('template_url')?>/assets/images/custom/logo-g.jpg" alt="Soportes STAR" class="">
                </figure>
                <p class="w-u-title section-title">Porque elegirnos?</p>
                <p class=" w-u-content">
                    Somos la mejor opción en el mercado mexicano de partes de repuesto automotriz, ya que contamos con estrictos controles de calidad que nos permiten ofrecer los mejores productos que igualan o superan los requerimientos de las piezas originales, y con una mejor relación costo beneficio.</p>
                    <a href="https://www.soportesstar.com/index.php/nosotros/" class="m-button w-u-b">Más sobre nosotros</a>
                </div>
            </div>
        </div>
    </div>

    <div class="body-wrapper col c-m-100 a-center">
        <div class="body-content col c-m-16 a-center lineas">
            <p class="section-title">Líneas de producto</p>

            <div class="line-wrapper col c-m-7 c-s-14">

                <div class="l-item l-i-tres col soportes">
                   <div class="l-i-title a-justify open">
                    <p class="">Soportes</p>
                    <span class="l-i-icon col c-m-1"></span>
                </div>
                <div class="l-i-info">
                    <figure class="l-i-figure">
                        <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/soportes.png" alt="">
                    </figure>
                    <hr>
                    <p class="l-i-i-title" > Soportes</p>
                    <p class="l-i-prgrp">El soporte ya sea de transmisión o de motor es un componente de hule metal cuya función es  asegurar que el motor y la transmisión mantengan una unión firme con el chasis logrando una perfecta  alineación entre sí,  evitando ruidos y que la vibración del motor y transmisión pase a la carrocería; en la actualidad hay diferentes tipos de soportes como son los convencionales (hule-metal), hidráulicos, neumáticos, electrónicos y electrohidráulicos.</p>
                </div>
            </div>

            <div class="l-item l-i-tres col miscelaneos">
                <div class="l-i-title a-justify">
                    <p class="">Misceláneos</p>
                    <span class="l-i-icon col c-m-1"></span>
                </div>
                <div class="l-i-info l-i-info-small">
                    <figure class="l-i-figure">
                        <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/miscelaneos.png" alt="">
                    </figure>
                    <hr>
                    <p class="l-i-i-title">Misceláneos</p>
                    <p class="l-i-prgrp">Contamos con una gran variedad de piezas cuya función específica es evitar la fricción o golpeteo  entre las partes metálicas del automóvil como la suspensión, el bastidor y carrocería en general; al evitar que las partes del vehículo se froten, se propicia un mejor confort durante el manejo. Existen diferentes materiales para su elaboración siendo el hule, hule-metal, aluminio, nylon y poliuretano entre otros.</p>
                </div>
            </div>


            <div class="l-item l-i-cinco col machetas">
               <div class="l-i-title a-justify">
                   <p class="">Machetas</p>
                   <span class="l-i-icon col c-m-1"></span>
               </div>
               <div class="l-i-info l-i-info-small">
                <figure class="l-i-figure">
                    <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/machetas.png" alt="">
                </figure>
                <hr>
                <p class="l-i-i-title">Machetas</p>
                <p class="l-i-prgrp">La macheta o cubre polvo ya sea de rueda o dirección en funcionamiento son similares; nos permiten mantener las juntas homocinéticas bien lubricadas, libres de aceites y polvos evitando desgastes excesivos así como los molestos ruidos al dar vuelta el vehículo hacia izquierda o derecha. Los materiales utilizados en su fabricación son hule, neopreno, aceites y varios acelerantes con los cuales logramos obtener la mejor calidad.</p>
            </div>
        </div>

        <div class="l-item l-i-siete col poleas-y-tensores">
            <div class="l-i-title a-justify">
                <p class="">Poleas y tensores</p>
                <span class="l-i-icon col c-m-1"></span>
            </div>
            <div class="l-i-info l-i-info-small">
                <figure class="l-i-figure">
                    <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/poleas.png" alt="">
                </figure>
                <hr>
                <p class="l-i-i-title">Poleas y tensores</p>
                <p class="l-i-prgrp">Es un elemento mecánico cuya función básica es trasmitir el movimiento por medio de una banda o correa a otros órganos auxiliares del motor, por ejemplo  alternador, bomba de agua, bomba de dirección, compresor de aire acondicionado, etc. Están fabricadas en acero al alto carbón o nylon con cargas de fibra de vidrio y baleros con engrasado interno especial que les permite soportar altas temperaturas.</p>
            </div>
        </div>

    </div>


    <div class="line-wrapper col c-m-7 c-s-14">
        <div class="l-item l-i-dos col tornillos-estabilizadores">
            <div class="l-i-title a-justify">
                <p class="">Tornillos estabilizadores</p>
                <span class="l-i-icon col c-m-1"></span>
            </div>
            <div class="l-i-info l-i-info-small">
                <figure class="l-i-figure">
                    <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/tornillos.png" alt="">
                </figure>
                <hr>
                <p class="l-i-i-title">Tornillos estabilizadores</p>
                <p class="l-i-prgrp">La  tarea específica de los tornillos estabilizadores es dar estabilidad al vehículo durante el manejo,  al trasmitir el  movimiento de la barra central a la horquilla hacen  la conducción más suave, más efectiva y eficaz. Los materiales que se usan en su fabricación son: metal, aluminio, nylon y hule.</p>
            </div>
        </div>

        <div class="l-item l-i-cuatro col equipo-pesado">
           <div class="l-i-title a-justify">
               <p class="">Equipo pesado</p>
               <span class="l-i-icon col c-m-1"></span>
           </div>
           <div class="l-i-info l-i-info-small">
            <figure class="l-i-figure">
                <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/equipo-pesado.png" alt="">
            </figure>
            <hr>
            <p class="l-i-i-title">Equipo pesado</p>
            <p class="l-i-prgrp">Existe una gran variedad de productos en este ramo como bujes se suspensión, soportes de cabina y motor, bujes para muelle, tensores, etc. Actualmente la gran mayoría se fabrican en poliuretano de diferentes durezas ya que este producto tiene un tiempo de vida mucho más largo y es más resistente a las altas y bajas temperaturas, degradación por aceites y solventes así como el  medio ambiente.</p>
            <p class="l-i-prgrp">Además de las bondades previamente mencionadas los productos fabricados con poliuretano mejoran su conducta en la aplicación de fuerzas, soportando cargas pesadas o trabajos que impliquen gran fatiga; por lo tanto logran un alto rendimiento y brindan ventajas sobradas en aquellos lugares o partes del vehículo donde existe la torsión por movimientos de balanceo o golpeteo continuo.</p>
        </div>
    </div>

    <div class="l-item l-i-seis col bases">
        <div class="l-i-title a-justify">
            <p class="">Bases de amortiguador</p>
            <span class="l-i-icon col c-m-1"></span>
        </div>
        <div class="l-i-info l-i-info-small">
            <figure class="l-i-figure">
                <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/bases.png" alt="">
            </figure>
            <hr>
            <p class="l-i-i-title">Bases de amortiguador </p>
            <p class="l-i-prgrp">Actualmente las bases de amortiguador son un componente necesario en casi todos los sistemas de suspensión; están formadas por una unión de metal y hule.  Existen dos tipos, delanteras y traseras, realizan la misma función, que es la de permitir el correcto funcionamiento de los amortiguadores; propician la correcta alineación de la suspensión, además  absorben ruidos y golpeteos.</p>
        </div>
    </div>

    <div class="l-item l-i-cuatro col bujes">
       <div class="l-i-title a-justify">
           <p class="">Bujes de suspensión</p>
           <span class="l-i-icon col c-m-1"></span>
       </div>
       <div class="l-i-info l-i-info-small">
        <figure class="l-i-figure">
            <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/bujes.png" alt="">
        </figure>
        <hr>
        <p class="l-i-i-title">Bujes de suspensión</p>
        <p class="l-i-prgrp">Los bujes de suspensión son elaborados de hule-metal se ubican en diferentes puntos entre la suspensión del auto y el bastidor o chasis. Los bujes aportan flexibilidad entre las partes movibles manteniendo un grado de dureza y por lo tanto de control. Apoyan al vehículo contra la vibración del camino y el ruido, así mismo ayudan a disminuir el desgaste de las partes más importantes del sistema de suspensión.</p>
    </div>
</div>

<div class="l-item l-i-nueve col equipo-original-oem">
    <div class="l-i-title a-justify open">
        <p class="">Equipo original / OEM</p>
        <span class="l-i-icon col c-m-1"></span>
    </div>
    <div class="l-i-info">
        <figure class="l-i-figure">
            <img src="<?php bloginfo('template_url')?>/assets/images/custom/productos/soportes.png" alt="">
        </figure>
        <hr>
        <p class="l-i-i-title">Equipo original / OEM</p>
        <p class="l-i-prgrp">El equipo original cuenta con las especificaciones requeridas por las plantas armadoras, considerando materia prima de primera calidad, hule, aleaciones metal, aluminio, nylon, para mayor duración del producto un fabricante reconocido de soportes de motor para equipo original a nivel mundial es CORTECO; que desarrolla productos en colaboración y coordinación de los principales fabricantes de vehículos.</p>
        <p class="l-i-prgrp">Actualmente SOPORTES STAR   cuenta  con la distribución de esta exclusiva marca para México.</p>
    </div>
</div> 
</div>
</div>
</div>


<div class="body-wrapper col c-m-100 a-center">
    <div class="body-content col c-m-16 a-center noticias">
        <p class="section-title">Noticias</p>

        <div class="col c-m-16">

            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=6');
            ?>


            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div class="news-item col c-m-5 c-s-14">

                    <figure class="news-figure"><img src="<?php the_post_thumbnail( 'blog_thumbnail' ); ?>" alt=""></figure>
                    <div class="news-info-wrapper">
                        <span class="news-meta"><?php the_time('M j, Y'); ?></span>
                        <p class="news-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
                    </div>

                </div>

            <?php endwhile; ?>
            <a href="#" class="m-button more-products">Ver todas las noticias</a>
        </div>
    </div>
</div>
<div class="body-wrapper col c-m-100 a-center">
    <div class="body-content col c-m-16 a-center contact-center-wrapper">
        <div class="contact-center col c-m-6 c-s-8">
            Contact center con 10 líneas
            <br>
        </div>
        <div class="contact-number col c-m-5 c-s-9">
            01 (722) 218 4380
        </div>
    </div>
</div>
</div>
<?php
get_footer();
