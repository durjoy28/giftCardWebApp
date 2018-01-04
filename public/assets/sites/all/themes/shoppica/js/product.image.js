jQuery( function($) {
        $("#product_images a[rel^='prettyPhoto'], #product_gallery a[rel^='prettyPhoto'], #product_images a").prettyPhoto({
            theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
            opacity: 0.5
        });
        $(".s_server_msg").live("click", function(){
            $(this).fadeOut(200, function(){
                $(this).remove();
            });
        });
        $('#review .pagination a').live('click', function() {
            $('#review').slideUp('slow');
            $('#review').load(this.href);
            $('#review').slideDown('slow');
            return false;
        });
    });