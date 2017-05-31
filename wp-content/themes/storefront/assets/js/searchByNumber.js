// Ajax search By Number

jQuery(function($){

    var page = 1;
    var loading = true;
    var $trigger = jQuery('.search-by-number');
    var $content = jQuery('body .results').find('ul');
    var load_posts = function(){
        console.log ("asdas" + $productCatTerm);

            $.ajax({
                type       : "GET",
                data       : {productCatTerm : $productCatTerm},
                dataType   : "html",
                url        : "https://www.soportesstar.com/wp-content/themes/storefront-child/searchByNumber.php",
                beforeSend : function(){
                    console.log('cargando')
                },
                success    : function(data){
                    jQuery('.products-number-archive').find('li').remove();
                    $data = jQuery(data);
                    $data.hide();
                    $content.append($data);
                    $data.fadeIn(500);

                    //console.log($data);
                },
                error     : function(jqXHR, textStatus, errorThrown) {
                    alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }
        });
    }

    $trigger.on('click',function(e) {
            $productCatTerm = jQuery('.search-by-number-value').val();
            e.preventDefault();
            load_posts();
        });
});