import $ from 'jquery';

export default class Accordion {

    constructor(accordionGroupClass) {
        this.accordionGroups = document.getElementsByClassName(accordionGroupClass);
        this.sortOutAccordionWrapper();
    }

    static initialize(accordionGroupClass) {
        return new Accordion(accordionGroupClass);
    }

    sortOutAccordionWrapper() {
        Array.from(this.accordionGroups).forEach(accordionGroup => this.performAccordion(accordionGroup));
    }

    performAccordion(accordionGroup) {

        let accordion = $(accordionGroup).find('> .accordion');
        let toggleButtons = $(accordion).find('> .heading');

        $(accordion).each(function (i, el) {
            if($(el).hasClass('active')){
                $(el).find('> .heading').addClass('active');
                $(el).find('> .content').slideDown('fast');
            }
        });

        $(toggleButtons).on('click', function (e) {
            e.preventDefault();

            if( $(this).hasClass('active') ){
                return $(this).removeClass('active').siblings('.content').slideUp('fast');
            } else {
                $(this).addClass('active').siblings('.content').slideDown('fast');
                var others = $(accordion).not( $(this).parent('.accordion') );

                $(others).find('.heading').removeClass('active');
                $(others).find('.content').removeClass('active').slideUp('fast');
            }

        });
    }
}