(function ($) {
    $(document).ready(function () {
  
        jQuery(function($){
            $('#filter').submit(function(){
                var filter = $('#filter');
                $.ajax({
                    url:filter.attr('action'),
                    data:filter.serialize(), // form data
                    type:filter.attr('method'), // POST
                    beforeSend:function(xhr){
                        filter.find('button').text('En cours...'); // changing the button label
                    },
                    success:function(data){
                        filter.find('button').text('Appliquer les filtres'); // changing the button label back
                        $('#response').html(data); // insert data
                    }
                });
                return false;
            });
        });
  
    });
  })(jQuery);