
    $(document).ready(function() {
    $('#tbl1').DataTable();
     } );
     
     
 SimplifyCommerce.hostedPayments(
                    function(response) {
                        console.log(response);
                        var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
                       

                        jQuery.ajax({
                            url: '/submit',
                            type: 'POST',
                            data: {_token: CSRF_TOKEN, response:response},
                            dataType: 'JSON',
                            success: function (data) { 
//                               
                                console.log(data);
                            } 
                        });
                   }
                ).closeOnCompletion();