import $ from 'jquery';

export default class Alert {

    constructor(alertClass) {
        this.alerts = document.querySelectorAll(alertClass);
        this.sortOutAlert();
    }

    static initialize(alertClass) {
        return new Alert(alertClass);
    }

    sortOutAlert() {
        Array.from(this.alerts).forEach(alert => this.performAlert(alert));
    }

    performAlert(alert) {

        let closeButton = $(alert).find('> .close');

        $(closeButton).on('click', function (e) {
            e.preventDefault();
            $(this).closest('.alert').slideUp('fast');
        });

    }
}