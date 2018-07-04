(function () {
    jQuery('#new-image').click(function(e){
        e.preventDefault();
        let i = jQuery(".image-section").length;
        let section = sectionGenerate('image-section col-lg-12');
        let input = inputGenerate(false, 'file', 'image['+i+']', true);
        let button = buttonGenerate('btn btn-outline-success', 'button'+i, 'Загрузить изображение');
        let item = document.createElement('tr');
        let td = document.createElement('td');
        td.className = 'image-section';

        jQuery(td).append(button).append(input);
        jQuery(item).append(td);
        jQuery('#new-files').append(item);

        // Opening file upload window
        jQuery('body').delegate('#'+button.id, 'click', function(){
            let elem = jQuery('body').find('input[name="'+input.name+'"]');
            jQuery(elem).trigger('click');
        });

        // File size validate
        jQuery('body').delegate('input[type="file"]', 'change', function () {
            if(jQuery(this).prop('files')[0].size > 20000000){
                alert("Файл слишком большой!");
                this.value = "";
            }

        });
    });

})();

function divGenerate(classname=false) {
    let div = document.createElement('div');

    if(classname){
        div.className = classname;
    }

    return div;
}

function sectionGenerate(classname=false){
    let section = document.createElement('section');

    if(classname){
        section.className = classname;
    }

    return section;
}

function inputGenerate(classname=false, type=false, name=false, hidden=false){
    let input = document.createElement('input');

    if(classname) input.className = classname;
    if(type) input.type = type;
    if(name) input.name = name;
    if(hidden) input.style.visibility = 'hidden';
    input.accept = 'image/*';

    return input;
}

function buttonGenerate(classname=false, id=false, text='button'){
    let button = document.createElement('button');

    if(classname) button.className = classname;
    if(id) button.id = id;

    button.type = 'button';
    button.textContent = text;

    return button;
}

