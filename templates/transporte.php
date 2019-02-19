<?php
    /* Template Name:  transporte*/ 
    get_header();
?>
<div id="tornado-landing">

<section class="template-section" id="atusalto">
    <div class="container">
        <div class="flex fcentered">
        
            <div class="col">
                
            </div>
            <div class="col left-allign">
                <h1 class="white heavy" >
                    <span class="normal">Te llevamos directo</span>  <br>
                    <span class="orange loved">
                         A TU SALTO <br>
                    </span>
                    <span class="big noodle">EN TEQUESQUITENGO</span> 
                </h1>
             
                    
                <p class="">Disfruta de nuestras salidas en Perisur los Sábados y Domingos a las 8 AM.</p>
                <p class="mar-bot">Viaje redondo: $400</p>
                
                <a href="#contacto-parachutes" class="social-container twitter mov-hid" target="_blank">
                    <div class="social-cube">
                      <div class="front center">
                        RESERVAR
                      </div>
                      <div class="bottom center ">
                         <i class="fas fa-bus-alt"></i>
                      </div>
                    </div>
                  </a>
                  
                  <a href="#contacto-parachutes" class="orangeb btn-new onlymov">RESERVAR</a>
                
            </div>
        </div>
    </div>
</section>

<section class="template-section" id="contacto-parachutes">
    <div class="container fcentered">
        <div class="w90">
           
           <div class="">
               <h2 class="navy loved left">CONTACTO</h2>
               
               <div id="cform">
                     <?php echo do_shortcode("[caldera_form id='CF58ec0a56e1dab']"); ?>
                </div>
               
           </div>
            
        </div>
    </div>
</section>






<?php 
    define("shiny", "shiny");
	//include 'shiny-footer.php';
    get_footer(shiny);
?>

