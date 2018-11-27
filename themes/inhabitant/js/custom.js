(function($){

    $(function() {


        const $searchInput = $('.main-navigation .search-field');
        const $searchToggle =  $('.main-navigation .search-toggle');

        $searchToggle.on('mousedown', function(event) {
            
            event.preventDefault();
      
            $searchInput.toggleClass('show'); 
            $searchInput.focus();
        });

        $searchInput.on('blur', function() {
            if ($searchInput.val() === '') {
                $searchInput.removeClass('show'); 
            }
         });

    });// end doc ready
})(jQuery);


  



