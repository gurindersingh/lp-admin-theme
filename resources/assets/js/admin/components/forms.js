import $ from 'jquery';
import autosize from 'autosize'

export default class Form {

    static InputGroup(inputGroupClass) {
        let inputGroups = this.alerts = document.getElementsByClassName(inputGroupClass);

        Array.from(inputGroups).forEach(inputGroup => {
            $(inputGroup).focusin(function () {
                $(inputGroup).addClass('focus');
            }).focusout(function () {
                $(inputGroup).removeClass('focus');
            })
        });
    }

    static iCheckLoad(iCheckClass) {
        var inputs = document.querySelectorAll(iCheckClass);
        Array.from(inputs).forEach(input => {
            this.iCheckPerform(input);
        });
    }

    static iCheckPerform(input) {
        var theme = $(input).data('theme');
        var skin = $(input).data('skin');

        if (!theme)
            return console.log("Please add attribute data-theme='' to input. e.g data-theme='flat'");

        if (theme == 'line')
            return this.iCheckPerformLine(input, theme, skin);

        if (!skin || skin == theme) {
            $(input).iCheck({
                checkboxClass: 'icheckbox_' + theme,
                radioClass: 'iradio_' + theme,
                increaseArea: '20%'
            });
        } else {
            $(input).iCheck({
                checkboxClass: 'icheckbox_' + theme + '-' + skin,
                radioClass: 'iradio_' + theme + '-' + skin,
                increaseArea: '20%'
            });
        }
    }

    static iCheckPerformLine(input, theme, skin) {

        let label = $(input).prev().get(0) ? $(input).prev().get(0) : $(input).next().get(0);
        label = label == 'undefined' ? '' : label;
        let labelText = $(label).text();
        $(label).remove();

        if (!skin || skin == theme) {
            $(input).iCheck({
                checkboxClass: 'icheckbox_' + theme,
                radioClass: 'iradio_' + theme,
                increaseArea: '20%',
                insert: '<div class="icheck_line-icon"></div>' + labelText
            });
        } else {
            $(input).iCheck({
                checkboxClass: 'icheckbox_' + theme + '-' + skin,
                radioClass: 'iradio_' + theme + '-' + skin,
                increaseArea: '20%',
                insert: '<div class="icheck_line-icon"></div>' + labelText
            });
        }
    }

    static autosizeTextarea(textAreaClass) {
        return autosize(document.querySelectorAll(textAreaClass));
    }
}