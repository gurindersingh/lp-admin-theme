import $ from 'jquery';

export default class Modal {

    constructor(modalButtonClass) {
        this.modalButtons = document.getElementsByClassName(modalButtonClass);
        this.sortOutModalButtons();
    }

    static initialize(modalButtonClass) {
        return new Modal(modalButtonClass);
    }

    sortOutModalButtons() {
        Array.from(this.modalButtons).forEach(modalButton => this.performModal(modalButton));
    }

    performModal(modalButton) {

        $(modalButton).on('click', function (e) {
            e.preventDefault();

            var modal = $('#' + $(this).data('modal-id'));

            var closeButton = $(modal).find("*[data-close-modal]");

            $(document.body).addClass('modal-open');

            $(modal).fadeIn("fast");

            $(closeButton).on('click', function () {
                $(modal).fadeOut("fast");
                $(document.body).removeClass('modal-open');
            });

        });

    }
}