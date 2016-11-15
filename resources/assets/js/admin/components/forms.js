import $ from 'jquery';
import autosize from 'autosize'

export default class Form {

    static InputGroup(inputGroupClass) {
        let inputGroups = document.getElementsByClassName(inputGroupClass);

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

    static initilizeFile(fileWrapperClass) {
        let fileWrappers = document.getElementsByClassName(fileWrapperClass);

        Array.from(fileWrappers).forEach(fileWrap => this.performFileInput(fileWrap));
    }

    static performFileInput(fileWrap) {

        let input = $(fileWrap).find('input');

        let ismultiple = $(input).prop('multiple');

        let imagePreviewBlock = $(fileWrap).find('.preview');

        let fileName = $(fileWrap).find('.file-name');

        let errorWrap = $(fileWrap).find('.error-wrap');

        let error = "";

        $(input).on('change', function () {

            $(imagePreviewBlock).html("");

            $(fileName).html("Choose file please... ");

            let regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;

            if( $.trim($(this).val()) == "" ) return;
            
            if( $(this).val() != undefined ){

                var files = $(this.files);
                
                $(imagePreviewBlock).html("");

                $(files).each(function () {
                    var file = $(this)[0];

                    if( regex.test(file.name.toLowerCase()) )
                    {
                        error = "";
                        $(errorWrap).html("");
                        var path = (window.URL || window.webkitURL).createObjectURL(file);
                        var img = $("<img />");
                        // img.attr("style", "height:100px;width: 100px; margin:10px; position:relative; float:left");
                        // img.attr("class", "img-thumbnail");
                        img.attr("src", path);
                        $(imagePreviewBlock).append(img);

                        if( ismultiple )
                        {
                            $(fileName).html("Preview below...");
                        } else {
                            $(fileName).html(file.name);
                        }
                    } else {
                        error = "Image only with extension .jpg | .jpeg | .png are accepted as a valid image"
                        $(errorWrap).html(error);
                        $(fileName).html("Choose correct file please... ");
                    }

                });

            }

        });

    }
}