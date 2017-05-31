
console.log('asdasd');

// Ajax search By Number

jQuery(function($){

    var page = 1;
    var loading = true;
    var $trigger = jQuery('.search-by-number');
    var $content = jQuery('body.results');
    var $productCatTerm = jQuery('.s-b-n-form .search-by-number');
    var load_posts = function(){
            $.ajax({
                type       : "GET",
                data       : {productCatTerm : $productCatTerm},
                dataType   : "html",
                url        : "https://www.soportesstar.com/wp-content/themes/storefront-child/searchByNumber.php",
                beforeSend : function(){
                	console.log('cargando')
                },
                success    : function(data){
                    $data = jQuery(data);
                    $data.hide();
                    $content.append($data);
                    $data.fadeIn(500);

                    console.log('cargados');
                },
                error     : function(jqXHR, textStatus, errorThrown) {
                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }
        });
    }

    $trigger.on('click',function(e) {
    		e.preventDefault();
            load_posts();
        });
    });



});