(function () {
    jQuery('#new-image').click(function(e){
        e.preventDefault();

        let i = jQuery(".image-section").length;
        let section = sectionGenerate('image-section col-lg-12');
        let input = inputGenerate(false, 'file', 'image'+i, true);
        let div = divGenerate('form-group col-lg-12');
        let subdiv = divGenerate('form-group col-lg-3');

        jQuery(subdiv).append(input).prepend(buttonGenerate('btn btn-outline-success', input.name + '-button', 'Загрузить изображение'));
        jQuery(div).append(subdiv);
        jQuery(section).append(div);

        jQuery('#nav-images > .content').append(section);
        jQuery('body').delegate('#'+input.name + '-button', 'click', function(){
            let elem = jQuery('body').find('input[name="'+input.name+'"]');
            jQuery(elem).trigger('click');
        });
    });
})();


// jQuery('body').delegate('.form-group > input', 'change', function(){
//     let filedata = jQuery(this).prop('files')[0];
//     jQuery.ajax({
//         url: '/admin/products/image-save',
//         data: {
//             'file': filedata
//         },
//         cache: false,
//         type: 'post',
//         contentType: false,
//         processData: false,
//         success: function(response){
//             console.log(response);
//         },
//         error: function(error){
//             console.log(error);
//         }
//     });
// });

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

