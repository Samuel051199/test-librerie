(function( $ ) {
        'use strict';
        $(document).ready(function () {
                console.log(ajax_var.nonce);
                $.ajax({
    
                        type: "POST",
                   
                        dataType: "html",
                   
                        url: ajax_var.url,
                   
                        data: {
                                action: 'chiamata_con_nonce',
                                nonce: ajax_var.nonce,   // pass the nonce here
                            },
                   
                        success: function(data){
                   
                         console.log(data);                 // OPERAZIONI DA SVOLGERE IN CASO DI SUCCESSO
                   
                        }
                   
                   });

        });
     
})( jQuery );
 
 
 

   

    //$complete_url = wp_nonce_url( $bare_url, 'https://devalessio.tlco.info/wp-json/wp/v2/posts'.$post->ID, 'my_nonce' );

