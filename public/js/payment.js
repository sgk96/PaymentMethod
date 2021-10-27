  $(document).ready(function() {
    var tbl1= jQuery('#tbl1').DataTable();

        jQuery( "#from" ).datepicker();
        jQuery( "#to" ).datepicker();
        
        jQuery('.srchDate').on('click',function() {
           
            var frm = jQuery('#from').val();
            var to = jQuery('#to').val();
            console.log(frm);
            console.log(to);
            tbl1.column(4).search(frm+'-'+to).draw();
                 
    } );
    });