jQuery(document).ready(function (){


    var $_init = true;


    var $gif = '<div class="solange-cargando"> </div>';


    jQuery('.la-artista-navegacion li a').live('click', function(){
	
       if($_init)
          ejecutar_animacion_inicial();



        jQuery('.area-vistas-la-artista').html($gif);
        $_variable = jQuery(this).attr('name');

        jQuery.ajax({
            type: "POST",
            url: "?q=return_html_a_artis_js",
            data: 'value='+$_variable,
            success: function (response) {
                jQuery('.area-vistas-la-artista').html(response);
            }
        });
		jQuery('.la-artista-navegacion li a'). css("color", "#ffffff");
		jQuery(this).css("color", "#f4da04");
		jQuery(this).css("text-decoration", "none");
        $_init = false;

        return false;
    });

    function ejecutar_animacion_inicial(){
        jQuery('.seccion-la-artista-izquierda').animate({
            width: '0px'
        }, 900);

        jQuery('.seccion-la-artista-derecha').animate({
            width: '0px'
        }, 900, function() {

            jQuery('.area-vistas-la-artista').show();
            jQuery('.area-vistas-la-artista').animate({
                height: '535',
                width: '925'
            });

        });


    }

});



