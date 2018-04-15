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
                if(response === 204) {
                    jQuery(elem).parent().parent().hide();
                } else {
                    alert('Something wrong. Try again.');
                }
            }
        });
    }
});