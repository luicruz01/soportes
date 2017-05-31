<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?>
<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' );?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/select2.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/category.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/js/category.js">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/js/catalog.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type='text/javascript' src='wp-content/plugins/woocommerce-products-filter/js/chosen/align_chosen_container.js'></script>
  <style type="text/css">
   .searchsubmit{
    margin-top: 23px;
  }
  .center {
   margin: 0 auto;
   width: 80%;
 }
 a.inline {
   display:inline;
 }
</style>
<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php wp_head(); ?>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site a-center">
    <?php
    do_action( 'storefront_before_header' ); ?>

    <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
      <div class="login-var c-m-100 a-center">
        <div class="l-v-inner col c-m-16 clearfix">
          <a href="http://casmainternational.com/facturacion/facturacion.php" class="c-m-3 facturacion c-s-50" target="_blank">Facturación</a> 
          <div class="c-m-5 facturacion c-s-50">
           <div class="row-fluid">
             <div class="span12">
              <div style="display:inline-block;width:35px">
               <a class="inline" href="https://www.facebook.com/arturo.gonzalez.1977?fref=ts" target="_blank" width="30px"><img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png" width="30px"></a>
             </div>
             <div style="display:inline-block;width:35px">
               <a class="inline" href="https://twitter.com/soportes_star" target="_blank" width="30px"><img src="http://icons.iconarchive.com/icons/limav/flat-gradient-social/256/Twitter-icon.png" width="30px"></a>
             </div>
             <div style="display:inline-block;width:35px">
               <a class="inline" href="https://www.instagram.com/explore/tags/soportesstar/" target="_blank" width="30px"><img src="https://maxcdn.icons8.com/Color/PNG/512/Logos/instagram_new-512.png" width="30px"></a>
             </div>
           </div>
         </div>
       </div>
       <div class="login-signup col c-m-4 c-s-50">
        <?php 
        if (is_user_logged_in()):
          echo ('<a href="https://www.soportesstar.com/index.php/mi-cuenta/" class="login">Mi cuenta</a>');
        else : 
						//echo ('<a href="https://www.soportesstar.com/index.php/inicia-sesion/" class="login">Login | </a><a href=" https://www.soportesstar.com/index.php/registrate/" class="login">Regístrate</a> ');
          echo ('<a href="https://www.soportesstar.com/index.php/login/" class="login">Login');

        endif;
        ?>
        <!-- <a href="http://www.soportesstar.com/wordpressnewsite/mi-cuenta/" class="login">Login | </a><a href="http://www.soportesstar.com/wordpressnewsite/registrate/" class="login">Regístrate</a>  -->
      </div>
    </div> 
  </div>
  <div class="main-nav-wrapper a-center">
    <div class="main-nav col c-m-16 a-justify">
      <a href="https://www.soportesstar.com" class="logo col c-m-2 c-s-50">
        Soportes Star
      </a> 
      <nav class="navbar navbar-default" style=" width: 85%; margin-left: 15%; margin-top: -81px;">
       <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://www.soportesstar.com/">Inicio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="https://www.soportesstar.com/index.php/nosotros/">Nosotros</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModalLong" type="button">Catalogo</a></li>
            <li><a href="https://www.soportesstar.com/index.php/noticias/">Noticias</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li><a href="https://www.soportesstar.com/index.php/mayoristas/">Mayoristas</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <nav class="navbar" style=" width: 70%; margin-left: 22%; margin-top: -11px; background: #12297e;">
     <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle lineaName" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-line-id="0" style="color: white;">Linea<span class="caret"></span></a>
            <ul class="dropdown-menu linea">
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle brandName" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Marca <span class="caret"></span></a>
            <ul class="dropdown-menu brands">
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle modelName" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Modelo <span class="caret"></span></a>
            <ul class="dropdown-menu models">
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle yearName" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Año <span class="caret"></span></a>
            <ul class="dropdown-menu years">
            </ul>
          </li>
          <li>
            <button type="button" class="btn btn-default navbar-btn" id="searchItems">Buscar</button>
          </li>
          <li>
            <button type="button" class="btn btn-default navbar-btn" id="reset">Reset</button>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <nav class="site-navigation col c-m-7 c-s-1" style=" margin-left: 80%; ">
   <a href="" class="cart-component-wrapper" >
    <div class="cart-component">
     <span class="cart-badge col hidden">
      <?php global $woocommerce; ?>
      <?php $my_cart_count = $woocommerce->cart->cart_contents_count; ?>
      <?php echo $my_cart_count; ?>
    </span>

    <div class="cart-info">
      <?php  /* Display number of items in cart and total */  global $woocommerce;  echo "".sprintf(_n('%d Producto', '%d Productos', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); echo "   ".$woocommerce->cart->get_cart_total();
      ?>
    </div>
  </div>
</a>
</nav>
<div class="s-filters col c-m-16">
  <?php do_action( 'storefront_header' ); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style=" margin-top: 20%;">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Descargar Catalogo PDF</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
    <div id="catalog_container">
      <div class="input-group">
       <input type="text" class="form-control" placeholder="Ingrese su Clave de Cliente" id="user_id">
       <span class="input-group-btn">
         <button class="btn btn-success" type="button" id="validate_user_id" onclick="isValidUseruser()">Validar</button>
       </span>
     </div>
   </div>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>

</header><!-- #masthead -->

<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

      <div class="s-s-breadcrumbs col c-m-16">
       <?php
			/**
			 * Functions hooked in to storefront_content_top
			 *
			 * @hooked woocommerce_breadcrumb - 10
			 */
			do_action( 'storefront_content_top' );
			?>
		</div>

    <!-- Catalogo -->
    <script type="text/javascript">
      function isValidUseruser() {
        var user_id = $("#user_id").val();
        if (user_id != undefined && user_id != null && user_id != "") {
          var parameters =  {
            'user_id': user_id
          };
          $.getJSON('https://www.soportesstar.com/api/index.php/api/users/is_user', parameters)
          .done(function(data, textStatus, jqXHR) {
            if (textStatus == "success") {
              if (data.data.status) {
                $("#catalog_container").replaceWith(
                  '<table class="table">'+
                  '<tbody>'+
                  '<tr>'+
                  '<td class="text-center">'+
                  '<a href="../wordpress/wp-content/uploads/2014/05/Catalogo-Star-Soportes-2015.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/cat_star_2015.jpg"></a> <br>'+
                  'Catalogo STAR Soportes Automotrices 2015'+
                  '</td>'+
                  '<td class="text-center">'+
                  '<a href="../wordpress/wp-content/uploads/2014/05/EQUIPO-PESADO.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/cat_eqpesado.jpg"></a> <br>'+
                  'Catalogo STAR Equipo Pesado'+
                  '</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2014/05/CATALOGOMACHETASYMISCELANEOS2015.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/portada_catalogo.png"></a> <br>'+
                  'Catalogo STAR Machetas y Miscelaneos'+
                  '</td>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2014/05/ANEXO1PRODUCTOSNUEVOS2015.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/portada_nuevos.jpg"></a> <br>'+
                  'Catalogo STAR Productos Nuevos'+
                  '</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2014/04/ANEXO1SOPORTESNOVIEMBRE2015.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/a2015pn.jpg"></a> <br>'+
                  'Anexo 1 Soportes Noviembre 2015'+
                  '</td>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2014/04/ANEXO1PRODUCTOSNUEVOSMICELANEOS2015.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/pnm2015.jpg"></a> <br>'+
                  'Anexo 1 Productos Nuevos Miscelaneos 2015'+
                  '</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2016/08/Premium.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/a2015prm.jpg"></a> <br>'+
                  'Catalogo 2016 Linea Premium / Premium Line'+
                  '</td>'+
                  '<td class="text-center">'+
                  '<a href="../wp-content/uploads/2016/08/Forros.pdf" target="_blank"><img src="http://soportesstar.com/imagenes/a2015F.jpg"></a> <br>'+
                  'Forros'+
                  '</td>'+
                  '</tr>'+
                  '</tbody>'+
                  '</table>'
                  );
              }else{
                alert("Numero incorrecto, ingrese un numero valido.");
              }
            }else{

            }
          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            alert('Error ' + jqXHR.status);
          })
        }else{
          alert("El campo no puede ser vacío.");
        }
      }
    </script>

    <!-- Buscador -->
    <script type="text/javascript">
      // Shorthand for $( document ).ready()
      $(function() {
        // get the lines and add to dropdown
        $.getJSON('https://www.soportesstar.com/api/index.php/api/items/get_lines')
        .done(function(data, textStatus, jqXHR) {
          if (textStatus == "success" && data.data.status) {
            var lines = '';
            $.each( data.data.result, function( i, item ) {

              lines += '<li><a class="line" data-line-id="'+item.line_id+'">'+item.name+'</a></li>';

            });
            $(".linea").append( lines );
          }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          console.log('Error ' + jqXHR.status);
        });


        var parameters =  {
          'line_id': '0'
        };
        $.getJSON('https://www.soportesstar.com/api/index.php/api/items/get_brands', parameters)
        .done(function(data, textStatus, jqXHR) {
          if (textStatus == "success") {
            var brands = '';
            $.each( data.data.result, function( i, item ) {

              brands += '<li><a class="brand" data-brand-id="'+item.brand_id+'">'+item.name+'</a></li>';

            });
            $(".brands").html( brands );
            $(".brandName").html('Marca<span class="caret"></span></a>');
            $(".models").html( '' );
            $(".modelName").html('Modelo<span class="caret"></span></a>');
            $(".years").html( '' );
            $(".yearName").html('Año<span class="caret"></span></a>');
            brand = 0;
            model = 0;
            year = 0;
          }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          console.log('Error ' + jqXHR.status);
        })

        $("#reset").css( "visibility", "hidden" );

      });// end document ready
    </script>

    <script type="text/javascript">

      $(document).ready(function() {

        var linea = 0;
        var brand = 0;
        var model = 0;
        var year = 0;

        $('.linea').on('click', '.line', function() {
          var elem = $(this);
          linea = elem.data("lineId");
          $(".lineaName").data("lineId", linea);
          $(".lineaName").html(elem.text()+'<span class="caret"></span></a>');
        });

        $('.brands').on('click', '.brand', function() {
          var elem = $(this);
          brand = elem.data("brandId");
          $(".brandName").html(elem.text()+'<span class="caret"></span></a>');
          if (linea > 0 && brand > 0) {
            var parameters =  {
              'line_id': linea,
              'brand_id': brand
            };
            $.getJSON('https://www.soportesstar.com/api/index.php/api/items/get_models', parameters)
            .done(function(data, textStatus, jqXHR) {
              if (textStatus == "success") {
                var models = '';
                $.each( data.data.result, function( i, item ) {

                  models += '<li><a class="model" data-model-id="'+item.model_id+'">'+item.name+'</a></li>';

                });
                $(".models").html( models );
                $(".modelName").html('Modelo<span class="caret"></span></a>');
                $(".years").html( '' );
                $(".yearName").html('Año<span class="caret"></span></a>');
                model = 0;
                year = 0;
              }
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
              console.log('Error ' + jqXHR.status);
            })
          }
        });

        $('.models').on('click', '.model', function() {
          var elem = $(this);
          model = elem.data("modelId");
          $(".modelName").html(elem.text()+'<span class="caret"></span></a>');
          if (linea > 0 && brand > 0 && model > 0) {
            var parameters =  {
              'line_id': linea,
              'brand_id': brand,
              'model_id': model
            };
            $.getJSON('https://www.soportesstar.com/api/index.php/api/items/get_years', parameters)
            .done(function(data, textStatus, jqXHR) {
              if (textStatus == "success") {
                var years = '';
                $.each( data.data.result, function( i, item ) {

                  years += '<li><a class="year" data-year-id="'+item.year_id+'">'+item.year+'</a></li>';

                });
                $(".years").html( years );
                $(".yearName").html('Año<span class="caret"></span></a>');

                year = 0;
              }
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
              console.log('Error ' + jqXHR.status);
            })
          }
        });

        $('.years').on('click', '.year', function() { 
          var elem = $(this);
          year = elem.data("yearId");
          $(".yearName").html(elem.text()+'<span class="caret"></span></a>');
        });


        // Search items button click
        $("#searchItems").click(function() {
          var table = '<table class="table"><thead><tr><th>No. Parte</th><th>Imagen</th><th>Marca</th><th>Modelo</th><th>Años</th><th>Linea</th><th>Descripción</th><th>Comprar</th></tr></thead><tbody>'
          if (linea > 0 || (brand > 0) || (model > 0)) {
            var parameters =  {
              'line_id': linea,
              'brand_id': brand,
              'model_id': model,
              'year_id': year
            };
            $.getJSON('https://www.soportesstar.com/api/index.php/api/items/search_items', parameters)
            .done(function(data, textStatus, jqXHR) {
              if (textStatus == "success") {

                if (data.data.status) {
                  $.each( data.data.result, function( i, item ) {
                    table += '<tr>';
                    table += '<th scope="row">'+item.star_number+'</th>';
                    table += '<td><img class="thumbnail zoom" src="http://soportesstar.com/fotos_marca_agua/'+item.star_number+'.JPG" alt="3559" width="50px"/></td>';
                    table += '<td>'+item.brand+'</td>';
                    table += '<td>'+item.model+'</td>';
                    var years = "";
                    $.each( item.years, function( i, year ) {
                      years += (year + ", ");
                    });
                    table += '<td>'+years+'</td>';
                    table += '<td>'+item.line+'</td>';
                    table += '<td>'+item.description+'</td>';
                    table += '<td><button class="btn btn-success" type="button"><a href="https://www.soportesstar.com/index.php/producto/'+item.uri+'/" target="_blank">Ver</a> </button></td>';
                    table += '</tr>';
                  });
                  table += '</tbody></table>';
                  $("#contenidoSoportes").html(table);
                  $(".content-area").html(table);

                  $("#reset").css( "visibility", "visible" );
              }else{ // No se encuentra ningun item
                table += '</tbody></table>';
                $("#contenidoSoportes").html(table);
                $(".content-area").html(table);
              }
            }
          })
            .fail(function(jqXHR, textStatus, errorThrown) {
              console.log('Error ' + jqXHR.status);
            })

          }else{
            alert("Se debe seleccionar al menos un campo del buscador.");
          }
          
        });

        $("#reset").click(function () {
            $(".lineaName").html('Linea<span class="caret"></span>');
            $(".brandName").html('Marca<span class="caret"></span></a>');
            $(".models").html( '' );
            $(".modelName").html('Modelo<span class="caret"></span></a>');
            $(".years").html( '' );
            $(".yearName").html('Año<span class="caret"></span></a>');
            brand = 0;
            model = 0;
            year = 0;
            linea = 0;
          $("#contenidoSoportes").html('<p style="height: 100px;"><br><h1>Inicia una nueva busqueda</h1><br></p>');
          $(".content-area").html('<p style="height: 100px;"><br><h1>Inicia una nueva busqueda</h1><br></p>');
        });

      });
    </script>