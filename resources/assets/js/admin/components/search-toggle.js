import $ from 'jquery';

export default class SearchToggle {

    constructor(searchToggleButtonSelector) {
        this.searchToggleButtons = document.querySelectorAll(searchToggleButtonSelector);
        this.sortOutSearchToggle();
    }

    static initialize(searchToggleButtonSelector) {
        return new SearchToggle(searchToggleButtonSelector);
    }

    sortOutSearchToggle() {
        Array.from(this.searchToggleButtons).forEach(searchToggleButton => this.performSearchToggle(searchToggleButton));
    }

    performSearchToggle(searchToggleButton) {

        $(searchToggleButton).on('click', function (e) {
            e.preventDefault();

            var container = $('#' + $(this).data('container-id') );
            var input = container.find("input[type='search']");

            if( container.hasClass('show') )
            {
                container.removeClass('show');
                input.val("");
            } else {
                container.addClass('show');
                $(container).find('.close-search').on('click', function () {
                    container.removeClass('show');
                    input.val("")
                });
            }
        });

    }
}