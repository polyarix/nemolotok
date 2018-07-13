(function () {
    jQuery('#new-image').click(function (e) {
        e.preventDefault();
        let i = jQuery(".image-section").length;
        let list_type = jQuery(this).attr('data-list-type');
        let section = sectionGenerate('image-section col-lg-12');
        let input = inputGenerate(false, 'file', 'image[' + i + ']', true);
        let button = buttonGenerate('btn btn-outline-success', 'button' + i, 'Загрузить изображение');
        let item = document.createElement('tr');
        let td = document.createElement('td');

        td.className = 'image-section';

        jQuery(td).append(button).append(input);
        jQuery(item).append(td);

        if((list_type === 'single' && i < 1)){
            jQuery('#new-files').append(item);
            jQuery(this).hide();
        } else if(list_type === 'single' && i === 1){
            jQuery(this).hide();
        } else if(list_type === 'multiplicity') {
            jQuery('#new-files').append(item);
        }


        // Opening file upload window
        jQuery('body').delegate('#' + button.id, 'click', function () {
            let elem = jQuery('body').find('input[name="' + input.name + '"]');
            jQuery(elem).trigger('click');
        });

        // File size validate
        jQuery('body').delegate('input[name="' + input.name + '"]', 'change', function () {
            if (jQuery(this).prop('files')[0].size > 20000000) {
                alert("Файл слишком большой!");
                this.value = "";
            } else {
                jQuery(button).parent().parent().hide();
                readURL(this, 'thumbnail'+i, input.name);
            }
        });

        jQuery('body').delegate('.preview-delete', 'click', function(e){

            e.preventDefault();
            let input_name = jQuery(this).attr('data-input-name');
            let section_class = jQuery(this).parents('section').attr('class');

            jQuery('input[name="'+input_name+'"]').remove();

            jQuery(this).parents('.'+section_class).remove();
        });
    });

    function divGenerate(classname = false) {
        let div = document.createElement('div');

        if (classname) {
            div.className = classname;
        }

        return div;
    }

    function sectionGenerate(classname = false) {
        let section = document.createElement('section');

        if (classname) {
            section.className = classname;
        }

        return section;
    }

    function inputGenerate(classname = false, type = false, name = false, hidden = false) {
        let input = document.createElement('input');

        if (classname) input.className = classname;
        if (type) input.type = type;
        if (name) input.name = name;
        if (hidden) input.style.visibility = 'hidden';
        input.accept = 'image/*';

        return input;
    }

    function buttonGenerate(classname = false, id = false, text = 'button') {
        let button = document.createElement('button');

        if (classname) button.className = classname;
        if (id) button.id = id;

        button.type = 'button';
        button.textContent = text;

        return button;
    }

    function getPreviewSection(image_id, input_name) {

        let html;
        html = '<section class="image-preview-section">';
        html += '<div class="form-group col-lg-12">';
        html += '<div class="text-left col-lg-3">';
        html += '<img id="'+image_id+'" class="thumbnail" src="#" >';
        html += '</div>';
        html += '<div class="col-lg-8">';
        html += '<table class="table table-striped table-bordered">';
        html += '<h5>Предпросмотр</h5>';
        html += '</table>';
        html += '</div>';
        html += '<div class="text-right col-lg-1">';
        html += '<button class="btn btn-outline-danger btn-lg preview-delete" data-input-name="'+input_name+'"><i class="fa fa-trash-o"></i></button>';
        html += '</div>';
        html += '</div>';
        html += '</section>';

        return html;
    }

    function readURL(input, image_id, input_name) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#images-info-block').append(getPreviewSection(image_id, input_name));
                jQuery('#'+image_id).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

})();

jQuery('.image-item-delete').click(function(e){
    e.preventDefault();
    if(confirm('Удалить?')){

        let file_id = jQuery(this).attr('data-file-id');
        let section = jQuery(this);
        let section_class = jQuery(this).parents('section').attr('class');

        jQuery.ajax({
            url: jQuery('.card').attr('data-image-remove-url'),
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            dataType: 'json',
            data: {
                file_id: file_id
            },
            success: function(response){
                if(response === true){
                    console.log(section);
                    jQuery(section).parents('.'+section_class).remove();
                }
            },
            error: function(response){
                console.log(response.error);
            }
        });
    }
});