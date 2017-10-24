/* ========================================================================
 * dashboard-v1.js
 * Page/renders: index.html
 * Plugins used: flot, sparkline, selectize
 * ======================================================================== */

'use strict';

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define([
            'selectize',
            'jquery.flot',
            'jquery.flot.resize',
            'jquery.flot.categories',
            'jquery.flot.time',
            'jquery.flot.tooltip',
            'jquery.flot.spline'
        ], factory);
    } else {
        factory();
    }
}(function () {

    // flot demo main function
    // ================================
    var flotDemo = function (element, url) {
        this.element = element;
        this.url     = '../'+url; // change this to your server url
    };

    flotDemo.prototype = {
        // load remote data
        // ================================
        remoteData: function (option, color) {
            var self = this;

            // jquery ajax setup
            $.ajax({
                url: self.url,
                cache: false,
                type: 'GET',
                dataType: 'json',
            }).done(function (data) {
                // init flot
                console.info('>>>>>>>>>>>>>>> ', data );
                $.plot($(self.element), data, option);

                // hide indicator
                $(self.element).parents('.panel').find('.indicator').removeClass('show');
            });
        }
    };
    
    $(function () {
	
		// Stats
        // ================================
        // default options
        var option = {
            series: {
                lines: { show: false },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 2,
                    fill: 0.5
                },
                points: {
                    show: false,
                    radius: 4
                }
            },
            grid: {
                borderColor: '#eee',
                borderWidth: 0,
                hoverable: true,
                backgroundColor: '#fcfcfc'
            },
            tooltip: true,
            tooltipOpts: { content: '%x : %y' },
            xaxis: {
                tickColor: '#fcfcfc',
                mode: 'categories'
            },
            yaxis: { tickColor: '#eee' },
            shadowSize: 0
        };
		
		// Selectize
        // ================================
        $('#selectize-customselect').selectize();
		
		// Stats #1
//        $.plot('#stats1', [{
//            color: '#DC554F',
//            data: [ ['Mon', 5], ['Tue', 8], ['Wed', 15], ['Thu', 6], ['Fri', 10] ]
//        }], option);
        
        let stats1 = new flotDemo('#stats1', '/api/flot/today_income');
        stats1.remoteData(option)
         
        // Sparkline
        // ================================
        $('.sparklines').sparkline('html', {
            enableTagOptions: true
        });
        
        // Area Chart - Spline
        // ================================
        let chart_audience = new flotDemo('#chart-audience', "/api/flot.php?type=audience" );

        let ca_options = {
            series: {
                lines: {
                    show: true
                },
                splines: {
                    show: false,
                    tension: 0.4,
                    lineWidth: 2,
                    fill: 0.2
                },
                points: {
                    show: true,
                    radius: 5
                }
            },
            grid: {
                borderColor: 'rgba(0, 0, 0, 0.1)',
                borderWidth: 1,
                hoverable: true,
                backgroundColor: 'transparent'
            },
            tooltip: true,
            tooltipOpts: {
                content: '%x : %y',
                defaultTheme: false
            },
            xaxis: {
                tickColor: 'rgba(0, 0, 0, 0.15)',
                mode: 'categories'
            },
            yaxis: {
                tickColor: 'rgba(0, 0, 0, 0.15)'
            },
            shadowSize: 0
        };
        
        chart_audience.remoteData(ca_options);
    });
}));