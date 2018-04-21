jQuery('.item_destroy').click(function(e){
    e.preventDefault();
    var elem = jQuery(this);
    if(confirm('Delete item?')){
        jQuery.ajax({
            url: jQuery(this).data('url'),
            type: 'POST',
            dataType: 'json',
            data: {
                _method: 'DELETE',
                _token: jQuery('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                console.log(response);
                if(parseInt(response) === 200) {
                    jQuery(elem).parent().parent().hide();
                } else {
                    alert('Something wrong. Try again.');
                }
            },

            error: function(response){
                console.log(response);
            }
        });
    }
});
jQuery('.search-form').change(function (e) {
    e.preventDefault();
    jQuery.ajax({
        url: jQuery('.search-form').data('url'),
        type: 'POST',
        // dataType: 'json',
        data: {
            _method: 'GET',
            _token: jQuery('meta[name="csrf-token"]').attr('content'),
            filter: {
                'category': jQuery('.search-form > input[name="category"]').val()
            }

        },
        success: function (response) {
            console.log(response);
            var new_table = jQuery(response).find('#bootstrap-data-table');
            jQuery('#bootstrap-data-table').fadeOut(500, function () {
               jQuery(this).html('').html(jQuery(new_table).html()).fadeIn()
            });
        },

        error: function (response) {

            alert('error');
            console.log(response);
        }
    });
});