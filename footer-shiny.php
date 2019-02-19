<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ( $post_id ) {
	$show_footer = get_post_meta( $post_id, '_template', true );
	$cases = array( 'no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title' );
	$footer_status = in_array( $show_footer, $cases );
}

if ( $mk_options['disable_footer'] == 'false' || ( $footer_status ) ) {
	$mk_footer_class .= ' mk-footer-disable';
}

if ( $mk_options['footer_type'] == '2' ) {
	$mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset( $mk_options['boxed_footer'] ) && ! empty( $mk_options['boxed_footer'] )) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile' : ' ';

?>


















   <section id="contacto-footer">
    <div class="container">
      <div class="flex">
          <div class="col">
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fas fa-map-marker-alt"></i>
               </div>
              <div class="bigc col">
                  <p>
                      Dirección aeródromo de Tequesquitengo
                        Emiliano zapata #19 San José Vista Hermosa, Puente de Ixtla, Morelos
                        Cp. 62680
                  </p>
              </div>
                 
             </div>
             
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fas fa-home"></i>
               </div>
              <div class="bigc col">
                  <p>
                      Oficina en Cuernavaca
                        Paracaidismo México AC
                        Av. De los 50 metros #100
                        Col villas deportivas
                        Torre III oficina 406
                        Cp. 62389
                        Cuernavaca, Morelos

                  </p>
              </div>
                 
             </div>
             
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="far fa-clock"></i>
               </div>
              <div class="bigc col">
                  <p>
                      
                        Horarios de atención <br>
                        Lunes a Domingo: 8:00 a 19:00
                  </p>
              </div>
                 
             </div>
             
             
              
          </div>
          <div class="col">
              
              <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fas fa-envelope"></i>
               </div>
              <div class="bigc col">
                  <p>
                      
                        Correo electrónico <br>
                        <a href="mailto:contacto@paracaidismo.mx?subject=Contacto%20Skydive" >contacto@paracaidismo.mx</a>
                  </p>
              </div>
                 
             </div>
             
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fas fa-mobile-alt"></i>
               </div>
              <div class="bigc col">
                  <p>
                      
                        Télefono y Whatsapp México <br>
                        <a href="tel:5540440422">55 4044 0422</a> y <a href="https://wa.me/5573970829" target="_blank">5573970829</a>
                  </p>
              </div>
                 
             </div>
             
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fas fa-phone"></i>
               </div>
              <div class="bigc col">
                  <p>
                      
                        Oficina en Cuernavaca <br>
                        <a href="tel:017771715650">01 777 171 5650</a>
                  </p>
              </div>
                 
             </div>
             
             <div class="flex">
                 
                 <div class="smallc col">
                  <i class="fab fa-facebook-square"></i>
               </div>
              <div class="bigc col">
                  <p>
                      
                        <a href="https://www.facebook.com/skydivemexico/" target="_blank">/skydivemexico</a>
                  </p>
              </div>
                 
             </div>
              
          </div>
      </div>
            
         
        
                       
    </div>
    
    <!--Start of Zendesk Chat Script-->
<script type="text/javascript">

</script>
<!--End of Zendesk Chat Script-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</section>

<section id="navybar">
    <div class="container">
            <div class="flex">
                <div class="col s">
                    
                    <p>Diseño Web por: <a href="https://esbrillante.mx/diseno-de-paginas-web-profesionales-empresas/" target="_blank">Esbrillante.mx</a> </p>
                    
                </div>
                <div class="col l flex">
                   
                   <div class="col menu-it">
                       
                       <a href="https://skydivemexico.mx/como-llegar-a-skydive/"><p>Cómo llegar</p></a>
                       
                   </div>
                   
                   <div class="col menu-it">
                      
                       <a href="https://skydivemexico.mx/blog/"><p>Blog   </p></a>
                       
                   </div>
                   
                   <div id="faq-it" class="col menu-it">
                       
                       <a href="https://skydivemexico.mx/preguntas-frecuentes-saltar-en-paracaidas/"><p>Preguntas frecuentes   </p></a>
                       
                   </div>
                   
                   <div class="col menu-it">
                       
                        <a href="https://skydivemexico.mx/transporte-para-saltar-en-paracaidas/#contacto-parachutes"><p>Contacto</p></a>
                       
                   </div>
                   
                    
                    
                    
                   
                </div>
            </div>
        </div>
 </section>


</section>






















</div>
<?php
	global $is_header_shortcode_added;

	/**
	 * After new changed, it will return null if there is no header shortcode
	 * added. Need to check and save it as array if it's null to avoid error.
	 *
	 * @since 6.0.3
	 * @see /components/shortcodes/mk_header/config.php
	 */
	if ( ! is_array( $is_header_shortcode_added ) ) {
		$is_header_shortcode_added = array();
	}

if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array( '3', $is_header_shortcode_added, true ) ) {
	mk_get_header_view(
		'holders', 'secondary-menu', [
			'header_shortcode_style' => $is_header_shortcode_added,
		]
	);
}
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
if ( 'false' !== $mk_options['go_to_top'] ) {
	mk_get_view( 'footer', 'navigate-top' );
}

if ( 'false' !== $mk_options['disable_quick_contact'] ) {
	mk_get_view( 'footer', 'quick-contact' );
}

		do_action( 'add_to_cart_responsive' );
?>
</div>


<?php
if ( $mk_options['header_search_location'] === 'fullscreen_search' ) {
	mk_get_header_view( 'global', 'full-screen-search' );
}
?>

<?php if ( ! empty( $mk_options['body_border'] ) && $mk_options['body_border'] === 'true' ) { ?>
	<div class="border-body border-body--top"></div>
	<div class="border-body border-body--left border-body--side"></div>
	<div class="border-body border-body--right border-body--side"></div>
	<div class="border-body border-body--bottom"></div>
<?php } ?>

	<?php wp_footer(); ?>

	<?php do_action( 'mk_theme_before_body_closing' ); ?>
</body>
</html>
