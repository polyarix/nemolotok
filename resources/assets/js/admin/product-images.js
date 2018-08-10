import Generator from './generator.js';

(function ($) {
    $('#new-image').click(function (e) {
        e.preventDefault();
        let i = $(".image-section").length;
        let list_type = $(this).attr('data-list-type');
        let section = Generator.sectionGenerate('image-section col-lg-12');
        let input = Generator.inputGenerate(false, 'file', 'image[' + i + ']', true);
        let button = Generator.buttonGenerate('btn btn-outline-success', 'button' + i, 'Загрузить изображение');
        let item = document.createElement('tr');
        let td = document.createElement('td');

        td.className = 'image-section';

        $(td).append(button).append(input);
        $(item).append(td);

        if((list_type === 'single' && i < 1)){
            $('#new-files').append(item);
            $(this).hide();
        } else if(list_type === 'single' && i === 1){
            $(this).hide();
        } else if(list_type === 'multiplicity') {
            $('#new-files').append(item);
        }


        // Opening file upload window
        $('body').delegate('#' + button.id, 'click', function () {
            let elem = $('body').find('input[name="' + input.name + '"]');
            $(elem).trigger('click');
        });

        // File size validate
        $('body').delegate('input[name="' + input.name + '"]', 'change', function () {
            if ($(this).prop('files')[0].size > 20000000) {
                alert("Файл слишком большой!");
                this.value = "";
            } else {
                $(button).parent().parent().hide();
                readURL(this, 'thumbnail'+i, input.name);
            }
        });

        $('body').delegate('.preview-delete', 'click', function(e){

            e.preventDefault();
            let input_name = $(this).attr('data-input-name');
            let section_class = $(this).parents('section').attr('class');

            $('input[name="'+input_name+'"]').remove();

            $(this).parents('.'+section_class).remove();
        });
    });

    function getPreviewSection(image_id, input_name, radio_val) {

        let html;
        html = '<section class="image-preview-section">';
        html += '<div class="form-group col-lg-12">';
        html += '<div class="text-left col-lg-3">';
        html += '<img id="'+image_id+'" class="thumbnail" src="#" >';
        html += '</div>';
        html += '<div class="col-lg-8">';
        html += '<table class="table table-striped table-bordered">';
        html += '<h5>Предпросмотр</h5>';
        html += '<tr>';
        html += '<th style="width: 250px;">Обложка</th>';
        html += '<td><input type="radio" name="cover_image" value="'+radio_val+'"></td>';
        html += '</tr>';
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
                $('#images-info-block').append(getPreviewSection(image_id, input_name, input.files[0].name));
                $('#'+image_id).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('.image-item-delete').click(function(e){
        e.preventDefault();
        if(confirm('Удалить?')){

            let file_id = $(this).attr('data-file-id');
            let section = $(this);
            let section_class = $(this).parents('section').attr('class');

            $.ajax({
                url: $('.card').attr('data-image-remove-url'),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                dataType: 'json',
                data: {
                    file_id: file_id
                },
                success: function(response){
                    if(response === true){
                        console.log(section);
                        $(section).parents('.'+section_class).remove();
                    }
                },
                error: function(response){
                    console.log(response.error);
                }
            });
        }
    });
})(jQuery);