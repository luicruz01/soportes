ky<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

        </div><!-- .col-full -->
    </div><!-- #content -->
</div><!-- #page -->
 <a name="contact"><div class="body-wrapper c-m-100 a-center footer" name="contact"></a>
                <div class="contact col c-m-6 c-s-100">
                    <div class="footer-title">
                        <p><i class="material-icons">email</i>  Envianos un mensaje</p>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="251" title="Contact form 1"];') ?>

                </div>
                <div class="location col c-m-9 c-s-100">
                    <div class="footer-title">
                        <p><i class="material-icons">location_on</i>  Envianos un mensaje</p>
                    </div>
                    <div class="location-item">
                        <p class="s-l-i-title">Matriz Toluca</p>
                        <div class="f-l-info col c-m-5 c-s-100">
                            <div class="f-blocks">  
                                <p class="s-l-i-adress">
                                    La Estrella No. 11, Col. San José Barbabosa, <br>Zinacantepec, Estado de México, México, <br>CP 51350
                                </p>
                            </div>
                            <div class="f-l-sidebar">
                                <p class="f-l-s-title">Correo:</p>
                                <p class="f-l-s-stuff"><a href="mailto:pedidos@soportesstar.com">pedidos@soportesstar.com</a></p>
                                <p class="f-l-s-title">Teléfonos: </p>
                                <p class="f-l-s-stuff">(722) 218 4380</p>
                                <p class="f-l-s-stuff">(722) 218 4381</p>
                                <p class="f-l-s-stuff">(722) 218 4287</p>
                                <p class="f-l-s-title">Fax:</p>
                                <p class="f-l-s-stuff">(722) 218 4381</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.0410529920932!2d-99.71750618553523!3d19.280580850521225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd87c2b0000001%3A0x971ab8f51cfdb5cb!2sSoportes+Star!5e0!3m2!1ses-419!2smx!4v1485808099940" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="location-item">
                        <p class="s-l-i-title">Sucursal Guadalajara</p>
                        <div class="f-l-info col c-m-5 c-s-100">
                            <div class="f-blocks">  
                                <p class="s-l-i-adress">
                                    Ignacio Allende No. 1696 Col. Agua Blanca Sur, <br>Zapopan, Jalisco, México, <br>CP 45235
                                </p>
                            </div>
                            <div class="f-l-sidebar">
                                <p class="f-l-s-title">Correo:</p>
                                <p class="f-l-s-stuff"><a href="mailto:pedidosgdl@soportesstar.com">pedidosgdl@soportesstar.com</a></p>
                                <p class="f-l-s-title">Teléfonos: </p>
                                <p class="f-l-s-stuff">(33) 3612 1424</p>
                                <p class="f-l-s-stuff">(33) 3612 1424</p>
                            </div>
                        </div>
                        <iframe class="col c-m-11" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.693021500044!2d-103.43732138551546!3d20.600590307633873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ac8e1fa9a63f%3A0x3d1523e174c9960e!2sAllende+1696%2C+Agua+Blanca+Sur%2C+45235+Zapopan%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1484598140880" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-wrapper c-m-100 a-center legal">
            <p>SOPORTES STAR <a href="https://www.soportesstar.com/index.php/politicas-de-venta-en-linea/" target="_bank"> POLÍTICAS DE VENTA EN LÍNEA</a></p>                
        </div>
        
        
    <?/*php do_action( 'storefront_before_footer' ); */?>

<!--
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="col-full">
-->

            <?php
            /**
             * Functions hooked in to storefront_footer action
             *
             * @hooked storefront_footer_widgets - 10
             * @hooked storefront_credit         - 20
             */
            /*do_action( 'storefront_footer' ); */?>

        <!--</div> .col-full -->
    <!--</footer> #colophon -->

    <?/*php do_action( 'storefront_after_footer' ); */?>

<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/custom_main.js?<?php echo time(); ?>"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/searchByNumber.js?<?php echo time(); ?>"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/select2.full.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96741581-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
