import $ from 'jquery';

export default class Mainmenu {

    static toggleMenu(menuId) {
        let button = document.querySelector(menuId);

        $(button).on('click', function (e) {
            e.preventDefault();
            $(document.body).toggleClass('main-menu-expended')
        });
    }

    static toggleList(menuClass) {
        let self = this;
        let menus = document.getElementsByClassName(menuClass);
        let allLinks = $(menus).find('a');

        let activeListItems = $(menus).find('li.active');

        this.initializeLoadState(activeListItems, menuClass);

        $(allLinks).on('click', function (e) {
            let href = $(this).attr('href');

            if ( href == undefined || href == '') {
                e.preventDefault();
            }

            let clickedLi = $(this).parent('li');
            let siblings = $(clickedLi).siblings('li');

            if (clickedLi.closest('ul').is('.' + menuClass)) {

                if (clickedLi.hasClass('active')) {
                    return self.performSlideUp(clickedLi);
                } else {
                    return self.resetSiblings(siblings).performSlideDown(clickedLi);
                }

            } else {

                if (clickedLi.hasClass('active')) {
                    return self.performSlideUp(clickedLi);
                } else {
                    self.resetSiblings(siblings);
                    return self.performSlideDown(clickedLi);
                }
            }
        });
    }

    static initializeLoadState(activeListItems, menuClass) {
        Array.from(activeListItems).forEach(function (activeListItem) {
            $(activeListItem).parentsUntil('ul .' + menuClass).slideDown();
            $(activeListItem).parents('li').addClass('active');
        });
    }

    static performSlideUp(listItem, immediate = false) {
        if (immediate == true) {
            listItem.removeClass('active');
            listItem.find('> ul').slideUp('fast');
            return this;
        }

        listItem.removeClass('active');
        listItem.find('li.active').removeClass('active');
        listItem.find('ul').slideUp('fast');
        return this;
    }

    static performSlideDown(listItem) {
        listItem.addClass('active');
        listItem.find('> ul').slideDown();
        return this;
    }

    static resetSiblings(siblings) {
        siblings.removeClass('active');
        siblings.find('li.active').removeClass('active');
        siblings.find('ul').slideUp('fast');
        return this;
    }
}