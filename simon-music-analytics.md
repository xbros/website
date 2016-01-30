---
title: Simon - Musique - Analytics **BETA**
---

**Work in progress**   
--------------------
Please **do not click** on the button below and try to log in   
It is meant for developers use only   
Statistic charts are coming shortly

<div id="embed-api-auth-container"></div>
<div id="chart-1-container"></div>
<div id="chart-2-container"></div>
<div id="chart-3-container"></div>
<div id="view-selector-1-container"></div>
<div id="view-selector-2-container"></div>
<div id="view-selector-3-container"></div>

<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>

<script>

    gapi.analytics.ready(function() {

        /**
         * Authorize the user immediately if the user has already granted access.
         * If no access has been created, render an authorize button inside the
         * element with the ID "embed-api-auth-container".
         */
        gapi.analytics.auth.authorize({
            container: 'embed-api-auth-container',
            clientid: '19511382016-7q1j8rp56s1t11u5idu2aflgqfvug5t8.apps.googleusercontent.com'
        });

        /**
         * Create a ViewSelector for the first view to be rendered inside of an
         * element with the id "view-selector-1-container".
         */
        var viewSelector1 = new gapi.analytics.ViewSelector({
            container: 'view-selector-1-container'
        });

        /**
         * Create a ViewSelector for the second view to be rendered inside of an
         * element with the id "view-selector-2-container".
         */
        var viewSelector2 = new gapi.analytics.ViewSelector({
            container: 'view-selector-2-container'
        });
        
        var viewSelector3 = new gapi.analytics.ViewSelector({
                    container: 'view-selector-3-container'
                });

        // Render both view selectors to the page.
        viewSelector1.execute();
        viewSelector2.execute();
        viewSelector3.execute();


        /**
         * Create the first DataChart for top countries over the past 30 days.
         * It will be rendered inside an element with the id "chart-1-container".
         */
        var dataChart1 = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:uniqueEvents',
                dimensions: 'ga:eventAction',
                'start-date': '2016-01-27',
                'end-date': 'today',
                sort: 'ga:uniqueEvents',
                filters: 'ga:eventCategory==Downloads'
            },
            chart: {
                container: 'chart-1-container',
                type: 'PIE',
                options: {
                    width: '100%',
                    pieHole: 4/9
                }
            }
        });


        /**
         * Create the second DataChart for top countries over the past 30 days.
         * It will be rendered inside an element with the id "chart-2-container".
         */
        var dataChart2 = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:uniqueEvents',
                dimensions: 'ga:eventLabel',
                'start-date': '2016-01-27',
                'end-date': 'today',
                sort: 'ga:uniqueEvents',
                filters: 'ga:eventCategory==Downloads'
            },
            chart: {
                container: 'chart-2-container',
                type: 'PIE',
                options: {
                    width: '100%',
                    pieHole: 4/9
                }
            }
        });

        var dataChart3 = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:uniqueEvents',
                dimensions: 'ga:eventCategory',
                'start-date': '2016-01-27',
                'end-date': 'today',
                sort: 'ga:uniqueEvents',
            },
            chart: {
                container: 'chart-3-container',
                type: 'PIE',
                options: {
                    width: '100%',
                    pieHole: 4/9
                }
            }
        });
        
        /**
         * Update the first dataChart when the first view selecter is changed.
         */
        viewSelector1.on('change', function(ids) {
            dataChart1.set({query: {ids: ids}}).execute();
        });

        /**
         * Update the second dataChart when the second view selecter is changed.
         */
        viewSelector2.on('change', function(ids) {
            dataChart2.set({query: {ids: ids}}).execute();
        });
        
        /**
         * Update the second dataChart when the third view selecter is changed.
         */
        viewSelector3.on('change', function(ids) {
            dataChart3.set({query: {ids: ids}}).execute();
        });

    });
</script>