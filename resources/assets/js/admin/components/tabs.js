import $ from 'jquery';

export default class Tabs {

    constructor(tabClass) {
        this.tabs = document.getElementsByClassName(tabClass);
        this.sortOutTabWrapper();
    }

    static initialize(tabClass) {
        return new Tabs(tabClass);
    }

    sortOutTabWrapper() {
        Array.from(this.tabs).forEach(tabWrapper => this.performTab(tabWrapper));
    }

    performTab(tabWrapper) {
        let links = $(tabWrapper).find('.tab-nav > li');
        var tabContents = $(tabWrapper).find('.tab-content-wrap > .tab-content');

        $(links).each(function (i, link) {
            $(link).on('click', function (e) {
                e.preventDefault();
                $(links).addClass('in-active');
                $(links).not(this).removeClass('active');
                $(this).removeClass('in-active').addClass('active');
                let index = $(this).index();
                let tabContentToBeMadeActive = $(tabContents).eq(index);
                let restTabContents = $(tabContents).not(tabContentToBeMadeActive);
                $(restTabContents).removeClass('active').hide();
                $(tabContentToBeMadeActive).addClass('active').fadeIn('slow');
            });
        });

    }
}