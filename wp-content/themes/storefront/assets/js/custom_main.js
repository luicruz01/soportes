//debugger




if( jQuery('body').hasClass('search-results') ){

    var search = jQuery('.search_term').text().split(' ');
    var stringSearch = parseInt(search[0]),
    isNumber,
    numberChance,
    descriptionNumber,
    totalAmount;

    if(search.length  < 2){

        numberChance = true;

    }


}

jQuery('#code-search-input').focus(function() {
    // turn on timer
    startTimer();
}).blur(function() {
    // turn off timer
    endTimer();
});

var lastValue = "",
    $timer = jQuery('#code-search-input'),
    timerCheckCount = 0,
    checkInputChange = function() {
        timerCheckCount += 1;
        if (lastValue !== $timer.val()) {
            lastValue = $timer.val();
            jQuery('.input-tags').val(lastValue)
        }
    },
    timer = undefined,
    startTimer = function() {
        timer = setInterval(checkInputChange, 200); // check input field every 200 ms (1/5 sec)
    },
    endTimer = function() {
        clearInterval(timer);
        timerCheckCount = 0;
    };




var 
tipo,
marca,
modelo,
anio = 0;

var current = 0;
var search_input = [""+""+""+""];

jQuery('document').ready(function(){
	
	jQuery(".parte-select,.marca-select,.modelo-select,.anio-select").select2({

		maximumInputLength: 10 // only allow terms up to 20 characters long

	});
    
    function assemble_query(){

        if(!tipo){;    
            productVal = "";
            console.log('tipo')
        }else{
            productVal = search_input[0];
        }

        if(!marca){;    
            console.log('marca')
            marcaVal = "";
        }else{
            marcaVal = search_input[1] + " ";
        }

        if(!modelo){;    
            console.log('modelo')
            modeloVal = "";
        }else{
            modeloVal = search_input[2] + " ";
        }

        if(!anio){;    
            console.log('anio')
            anioVal = "";
        }else{
            anioVal = search_input[3] + " ";
        }

        var search_part_query = ( productVal + marcaVal + modeloVal + anioVal);

        jQuery('.code-search').val(search_part_query);
        checkInputChange();
    };
    
    jQuery('.parte-select').on('select2:select', function (evt) {
	  var option = (jQuery(this).find('option:selected').val());
        search_input[0] = option;
        console.log(search_input);
        tipo = 1;
        assemble_query();
	});
    jQuery('.marca-select').on('select2:select', function (evt) {
	  var option = (jQuery(this).find('option:selected').val());
        marca = 1;
        search_input[1] = option;
        assemble_query();
	});
     
    jQuery('.s-f-s-modelo-wrapper select').on('select2:select', function (evt) {
        var option = (jQuery(this).find('option:selected').val());
        modelo = 1;
        search_input[2] = option;
        assemble_query();
	});
    jQuery('.anio-select').on('select2:select', function (evt) {
      var option = (jQuery(this).find('option:selected').val());
        anio = 1;
        search_input[3] = option;
        assemble_query();
    });


    if((jQuery('.products').length > 0) || (jQuery('.type-product').length > 0)){

        jQuery('.site-main li.product').each(function(){

            console.log('iteracion');

            if(jQuery(this).hasClass('product_cat-soportes')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Soportes</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-machetas')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Machetas</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-miscelaneos')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Miscelaneos</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-poleas-y-tensores')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Poleas y tensores</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-tornillos-estabilizadores')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Tornillos estabilizadores</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-bases')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Bases de amortiguador</span>');
                return true;
            }

            if(jQuery(this).hasClass('product_cat-equipo-pesado')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Equipo pesado</span>');
                return true;

            }

            if(jQuery(this).hasClass('product_cat-bujes-para-suspension')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Bujes de suspensión</span>');
                return true;

            }

            if(jQuery(this).hasClass('product_cat-equipo-original-oem')){

                jQuery(this).find('img').after(' <hr class="product-div"> <span class="product-tag">Equipo original / OEM</span>');
                return true;

            }

        });

    }


    function refresCart(){
        
        setTimeout(function(){
            totalAmount = jQuery(' p.total .woocommerce-Price-amount').text(); 
            jQuery('div.cart-info .woocommerce-Price-amount').text(totalAmount);
            isMayorist();
        },3000);

        console.log('succes');


    }

    function isMayorist(){
        totalAmount = jQuery(' p.total .woocommerce-Price-amount').text(); 
        var number = Number( totalAmount.replace(/[^0-9\.]+/g,""));
        
        if(number > 10000){

            if(jQuery('.many-products').length <= 0){
            
                jQuery('body').before('<div class="many-products">Tenemos un precio especial para ti, marca al 554322 4566 y pregunta por el precio de mayoristas</div> ');
                console.log(' es mayor');

            }

            console.log(number);

        } 


    }

jQuery('body').on('.many-products-close','click',function(e){
    //e.preventDefault();
    //jQuery('.many-products').addClass('hidden');
    console.log('cerrar');
})


jQuery('.add_to_cart_button').on('click',function(){

    refresCart();

})

isMayorist();















    if(numberChance){

        numberSearch();

    }



    function numberSearch (){

        //console.log('trueSD');
        jQuery('.site-main .product').each( function(){

            var numberProduct = jQuery(this).find('.search-result-description p').eq(4).text().split(' ');                
            descriptionNumber = jQuery(this).find('.search-result-description p').eq(0).text();                
            var thisNumberProduct = parseInt((numberProduct[3]));


            if(stringSearch == thisNumberProduct){

                //console.log('true');
                isNumber = true;

            }else{

                console.log('false');

                isNumber = false;
                return false;

            }

            console.log('asdasd')


        });


        if(isNumber){

            console.log('trueee');

            var imageUrl = jQuery('.site-main .product').eq(0).find('img').attr('src');
            var principal_product_title = jQuery('.page-title').text();

            jQuery('.page-title').before(

                '<div class="principal-product col c-m-98"> <img src="'+ imageUrl +'" class="p-p-image"/> <div class="p-p-info"> <p class="p-p-antetitle">Pieza</p> <p class="p-p-title">'+ search +'</p> <p class="p-p-description">' + descriptionNumber + '</p> </div></div>'

                );

            jQuery('body').addClass('number-view');

            jQuery('.site-main .product').find('img').remove();

        }
    }





    if(jQuery('body').hasClass('home')){

        jQuery('.s-s-breadcrumbs').remove();

        //console.log('deleted');

    }
    
    
    
    
    
	jQuery('.l-i-title').on('click',function(){
		jQuery(this).parent().find('.l-i-info').toggleClass('l-i-info-small');
		jQuery(this).toggleClass('open');
	})




	jQuery('.marca-select').on('change', function(){
		
		var model = (jQuery(this).val());
        
        jQuery('.acura').addClass('hidden');
		jQuery('.s-f-s-modelo-wrapper').find('span').remove();
        
		jQuery("."+ model).removeClass('hidden').select2();
        console.log(model);
	});


    
    // if(jQuery('.products')){
    //     jQuery(this).find('li').each(function(){
            
    //         var productTitle = jQuery(this).find('h3'),
    //         linea_1 = new RegExp("soportes"),
    //         linea_2 = new RegExp("poleas"),
    //         linea_3 = new RegExp("bases"),
    //         linea_4 = new RegExp("miscelaneos"),
    //         linea_5 = new RegExp("machetas"),
    //         linea_6 = new RegExp("tensores"),
    //         linea_7 = new RegExp("tornillos"),
    //         linea_8 = new RegExp("equipo pesado"),
    //         linea_9 = new RegExp("Bujes");
            
    //         if(linea_1.test(productTitle)){
    //             console.log("Soportes")
    //         }
    //         if(linea_2.test(productTitle)){
    //             console.log("Poleas")
    //         }
    //         if(linea_3.test(productTitle)){
    //             console.log("Bases");
    //         }
    //         if(linea_4.test(productTitle)){
    //             console.log("Miscelaneos");
    //         }
    //         if(linea_5.test(productTitle)){
    //             console.log("Machetas");
    //         }
    //         if(linea_6.test(productTitle)){
    //             console.log("Tensores");
    //         }
    //         if(linea_7.test(productTitle)){
    //             console.log("Tornillos");
    //         }
    //         if(linea_8.test(productTitle)){
    //             console.log("Equipo pesado");
    //         }
    //         if(linea_9.test(productTitle)){
    //             console.log("Bujes");
    //         }
    //         console.log('iterate');
    //     })
    // }

    if(jQuery('.shipping_method').length > 0){
        jQuery('.shipping').find('td').prepend('<div class="shipping_information"><p>Revisa cobertura frecuencia y tiempos de entrega:.</p><a href="https://www.soportesstar.com/wp-content/uploads/2016/12/COBERTURA-DHL-ACTUALIZADA-2016.xlsx" class="shipping_dhl" target="_blank">Información DHL</a><a href="https://www.soportesstar.com/wp-content/uploads/2016/12/COBERTURA-ESTAFETA-2016.xlsx" class="shipping_estafeta" target="_blank">Información Estafeta</a></div>');
        console.log('simon');
    }

//    jQuery('.woocommerce-main-image').prepend('<img class="watermark" src="http://www.soportesstar.com/catalogo_star_v3/images/marca_agua.png">');






    windowWidth = (jQuery(window).width());
    cartWrapperTop = jQuery('.cart-component-wrapper').offset().top;
    cartWrapperLeft = jQuery('.cart-component-wrapper').offset().left;
    cartWrapperWidth = jQuery('.cart-component-wrapper').outerWidth();
    cartWrapperHeight = jQuery('.cart-component-wrapper').outerHeight(true);
    cartWidth = jQuery('.header-widget-region').outerWidth();

    jQuery('.widget_shopping_cart').append('<a href="#" class="close-cart">Cerrar</a>');

    jQuery('.cart-component-wrapper, .close-cart').on('click',function(e){
        e.preventDefault();
        //console.log('clicked');
        jQuery('.header-widget-region').css({
            top: (cartWrapperTop + cartWrapperHeight),
            left: (cartWrapperLeft - (cartWidth - cartWrapperWidth))
        });

        jQuery('.header-widget-region').toggleClass('show-cart');

    });

    jQuery(window).on('resize',function(){
    windowWidth = (jQuery(window).width()); 
    cartWrapperTop = jQuery('.cart-component-wrapper').offset().top;
    cartWrapperLeft = jQuery('.cart-component-wrapper').offset().left;
    cartWrapperWidth = jQuery('.cart-component-wrapper').outerWidth();
    cartWrapperHeight = jQuery('.cart-component-wrapper').outerHeight(true);
    cartWidth = jQuery('.header-widget-region').outerWidth();   

        jQuery('.header-widget-region').css({
            top: (cartWrapperTop + cartWrapperHeight),
            left: (cartWrapperLeft - (cartWidth - cartWrapperWidth))
        });
        console.log('resized');
    });

    jQuery('.primary-navigation').clone().prependTo('body').addClass('responsive-nav').prepend('<p class="r-n-header"><span>Secciones</span> <span> <a href="#" class="close-responsive-nav">cerrar</a> </span></p>');


    jQuery('.responsive-trigger').on('click',function(){
        jQuery('.responsive-nav').addClass('responsive-nav-active');
        // jQuery('.primary-navigation').css({
        //     width: (jQuery(window).width()),
        //     height: (jQuery(window).height())
        // });
        jQuery('.site, .footer').addClass('hidden');

    });

    jQuery('.close-responsive-nav').on('click',function(){
        jQuery('.responsive-nav').removeClass('responsive-nav-active');
        jQuery('.site, .footer').removeClass('hidden');
        console.log('trigereado')

    });











		
});

