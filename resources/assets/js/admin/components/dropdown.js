import $ from 'jquery';

export default class Dropdown {

    constructor(dropdownClass) {
        this.dropdownWraps = document.querySelectorAll(dropdownClass);
        this.sortOutDropdownWrapper();
    }

    static initialize(dropdownClass) {
        return new Dropdown(dropdownClass);
    }

    sortOutDropdownWrapper() {
        Array.from(this.dropdownWraps).forEach(dropdownWrap => this.performDropdown(dropdownWrap));
    }

    performDropdown(dropdownWrap) {

        var toggleButton = $(dropdownWrap).find('> *[data-dropdown="toggle-button"]');
        var dropdownList = $(dropdownWrap).find('> *[data-dropdown="list"]');

        $(toggleButton).on('click', function (e) {
            e.preventDefault();

            var button = $(this);
            if( button.hasClass('active'))
            {
                dropdownList.removeClass('active');
                button.removeClass('active');
            } else {
                dropdownList.addClass('active');
                button.addClass('active');

                $(dropdownWrap).focusout(function () {
                    button.removeClass('active');
                    dropdownList.removeClass('active');
                });
            }

        });

    }
}