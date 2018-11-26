(function($){

    $(function() {

        $('.search-submit').on('click', function(event) {
            
            event.preventDefault();
      
            $('.search-field').addClass('show');
            $('.search-field').focus();
        });

        // $('.search-submit').on('click', function() {
        //     $('.search-field').removeClass('show');
        // });

        $('.search-field').on('blur', function() {
            if ($(this).val() === "") {
            $('.search-field').removeClass('show'); 
            }
         });

    });
})(jQuery);


  



