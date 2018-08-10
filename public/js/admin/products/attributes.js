import Generator from './generator.js';
(function ($) {
    let i = $('.attribute-section').length;

    $('#new-attribute').click(function(e){
        e.preventDefault();
        $('#attributes-block').append(getAttributeSelector(i));
    });

    $('body').delegate('.attribute-selector', 'change', function(){
        let selector_id = this.getAttribute('id');
        let section_class = $(this).parents('section').attr('class');
        let attrib_id = $(this).val();
        let attrib_name = $(this).text();

        $(this).parents('.'+section_class).html(getAttributeInput(i, attrib_id, attrib_name));
    });

    function getAttributeSelector(id_postfix)
    {
        let html = '<section class="attribute-section">';
        html += '<div class="form-group">';
        html += '<label for="attribute'+id_postfix+'">Аттрибут</label>';
        html += '<select id="attribute'+id_postfix+'" class="form-control attribute-selector">';
        html += '<option></option>';
        if($('.card')[0].hasAttribute('data-attributes')){
            let attributes = JSON.parse($('.card').attr('data-attributes'));
            for(let i = 0; i < attributes.length; i++){
                html += '<option value="'+attributes[i].id+'">'+attributes[i].name+'</option>';
            }
        }
        html += '</select>';
        html += '</div>';
        html += '</section>';

        return html;
    }

    function getAttributeInput(i, attrib_id, attrib_name)
    {
        let html;
        let name = "attributes["+i+"]";
        html = '<div class="form-group">';
        html +=        '<label for="sorting" class=" form-control-label">'+attrib_name+'</label>';
        html +=        '<input type="text" name="'+name+'" value="" class="form-control">';
        html +='</div>';

        return html;
    }

})(jQuery);