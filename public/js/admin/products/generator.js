'use strict';

export default class Generator
{
    static divGenerate(classname = false) {
        let div = document.createElement('div');

        if (classname) {
            div.className = classname;
        }

        return div;
    }

    static sectionGenerate(classname = false) {
        let section = document.createElement('section');

        if (classname) {
            section.className = classname;
        }

        return section;
    }

    static inputGenerate(classname = false, type = false, name = false, hidden = false) {
        let input = document.createElement('input');

        if (classname) input.className = classname;
        if (type) input.type = type;
        if (name) input.name = name;
        if (hidden) input.style.visibility = 'hidden';
        input.accept = 'image/*';

        return input;
    }

    static buttonGenerate(classname = false, id = false, text = 'button') {
        let button = document.createElement('button');

        if (classname) button.className = classname;
        if (id) button.id = id;

        button.type = 'button';
        button.textContent = text;

        return button;
    }
}