(function () {
    jQuery('#new-image').click(function(e){
        e.preventDefault();

        let i = jQuery(".image-section").length;
        let section = sectionGenerate('image-section col-lg-12');
        let input = inputGenerate(false, 'file', 'image'+i);
        let div = divGenerate('form-group col-lg-12');
        let subdiv = divGenerate('form-group');

        jQuery(subdiv).append(input);
        jQuery(div).append(subdiv);
        jQuery(section).append(div);

        jQuery('#nav-images > .content').append(section);
    });

    jQuery('.form-group > input').on('change', function(){
        alert("asdasasdasdd");
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

function inputGenerate(classname=false, type=false, name=false){
    let input = document.createElement('input');

    if(classname) input.className = classname;
    if(type) input.type = type;
    if(name) input.name = name;
    return input;
}

