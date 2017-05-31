var current = 0;
var search_input = ['','','',''];

jQuery('document').ready(function(){
	
	jQuery(".parte-select,.marca-select,.modelo-select,.anio-select").select2({

		maximumInputLength: 10 // only allow terms up to 20 characters long

	});
    
    function assemble_query(){
        var search_part_query = ((search_input[0]) + " " + (search_input[1]) + " " + (search_input[2]) + " " + (search_input[3]));
        jQuery('.main-input').val(search_part_query);
    };
    
    jQuery('.parte-select').on('select2:select', function (evt) {
	  var option = (jQuery(this).find('option:selected').text());
        search_input[0] = option;
        console.log(search_input);
        assemble_query();
	});
     jQuery('.marca-select').on('select2:select', function (evt) {
	  var option = (jQuery(this).find('option:selected').text());
        search_input[1] = option;
        assemble_query();
	});
     jQuery('.anio-select').on('select2:select', function (evt) {
	  var option = (jQuery(this).find('option:selected').text());
        search_input[2] = option;
        assemble_query();
	});
    
     jQuery('.s-f-s-modelo-wrapper select').on('select2:select', function (evt) {
        var option = (jQuery(this).find('option:selected').text());
        search_input[3] = option;
        assemble_query();
	});
    
    
    
    
    
    
    
	jQuery('.l-i-title').on('click',function(){
		jQuery(this).parent().find('.l-i-info').toggleClass('l-i-info-small');
		jQuery(this).toggleClass('open');
	})




	jQuery('.marca-select').on('change', function(){
		
		var model = (jQuery(this).val());
        
        jQuery('.acura').addClass('hidden');
		jQuery('.s-f-s-modelo-wrapper').find('span').remove();
        
		jQuery("."+ model).removeClass('hidden').select2();
	});

    
    if(jQuery('.products')){
        jQuery(this).find('li').each(function(){
            
            var productTitle = jQuery(this).find('h3'),
            linea_1 = new RegExp("soportes"),
            linea_2 = new RegExp("poleas"),
            linea_3 = new RegExp("bases"),
            linea_4 = new RegExp("miscelaneos"),
            linea_5 = new RegExp("machetas"),
            linea_6 = new RegExp("tensores"),
            linea_7 = new RegExp("tornillos"),
            linea_8 = new RegExp("equipo pesado"),
            linea_9 = new RegExp("Bujes");
            
            if(linea_1.test(productTitle)){
                console.log("Soportes")
            }
            if(linea_2.test(productTitle)){
                console.log("Poleas")
            }
            if(linea_3.test(productTitle)){
                console.log("Bases");
            }
            if(linea_4.test(productTitle)){
                console.log("Miscelaneos");
            }
            if(linea_5.test(productTitle)){
                console.log("Machetas");
            }
            if(linea_6.test(productTitle)){
                console.log("Tensores");
            }
            if(linea_7.test(productTitle)){
                console.log("Tornillos");
            }
            if(linea_8.test(productTitle)){
                console.log("Equipo pesado");
            }
            if(linea_9.test(productTitle)){
                console.log("Bujes");
            }
            console.log('iterate');
        })
    }
    
    
    
		
});

