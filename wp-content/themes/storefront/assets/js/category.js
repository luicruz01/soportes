	
// Shorthand for $( document ).ready()

function createTagName(){
	if((jQuery('.products').length > 0) || (jQuery('.type-product').length > 0)){

        jQuery('.site-main li.product').each(function(){

            console.log('iteracion');

            if(jQuery(this).hasClass('pa_linea-soportes')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Soportes</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-machetas')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Machetas</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-miscelaneos')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Miscelaneos</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-poleas-y-tensores')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Poleas y tensores</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-tornillos-estabilizadores')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Tornillos estabilizadores</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_tag-bases')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Bases de amortiguador</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-equipo-pesado')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Equipo pesado</span>');
                return true;
            }

            if(jQuery(this).hasClass('pa_linea-bujes-para-suspension')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Bujes de suspensión</span>');
                return true;
            }
            
            if(jQuery(this).hasClass('pa_linea-equipo-original-oem')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Equipo original / OEM</span>');
                return true;
            }
            

        });

    }
}

$(window).load(function() {    
    createTagName();
});

$(function() {
	createTagName();
});