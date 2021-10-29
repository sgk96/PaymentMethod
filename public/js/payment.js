  $(document).ready(function(){
       $('#from').datepicker();
         $('#to').datepicker();
        $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#from').datepicker("getDate");
            var max = $('#to').datepicker("getDate");
            var startDate = new Date(data[4]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#from").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#to").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('#tbl1').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('.srchDate').on('click',function() {
                table.draw();
            });
        });