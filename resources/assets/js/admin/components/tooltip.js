import $ from 'jquery';
import tipso from 'tipso'

export default class ToolTip {

    constructor(tooltipClass) {
        this.tooltips = document.getElementsByClassName(tooltipClass);
        this.sortOutTooltip();
    }

    static initialize(tooltipClass) {
        return new ToolTip(tooltipClass);
    }

    sortOutTooltip() {
        Array.from(this.tooltips).forEach(tooltip => this.performTooltip(tooltip));
    }

    performTooltip(tooltip) {
        return $(tooltip).tipso(this.getSettings(tooltip));
    }

    getSettings(tooltip) {
        var dataMap = {};

        $.each(tooltip.attributes, function (key, attr) {
            var match = attr.name.match(/^data-(.+)/);
            if (match) {
                var name = match[0].replace(/data-/g, "");

                if (name != 'tipso')
                    dataMap[name] = attr.value;
            }
        });
        
        return $.extend({}, this.tooltipDefaults(), dataMap);
    }

    tooltipDefaults() {
        return {
            speed: 400,
            size: '', // 'tiny', 'small', 'default', 'large'
            background: '#55b555',
            titleBackground: '#333333',
            color: '#ffffff',
            titleColor: '#ffffff',
            titleContent: '',
            showArrow: true,
            position: 'top',
            width: 200,
            maxWidth: '',
            delay: 200,
            hideDelay: 0,
            animationIn: '',
            animationOut: '',
            offsetX: 0,
            offsetY: 0,
            tooltipHover: false,
            content: null,
            ajaxContentUrl: null,
            contentElementId: null,
            useTitle: false,
            templateEngineFunc: null,
            onBeforeShow: null,
            onShow: null,
            onHide: null
        };
    }
}