---
title: Simon - Musique - Analytics **BETA**
---

**Work in progress**   
--------------------
Please **do not click** on the button below and try to log in   
It is meant for developers use only   
Statistic charts are coming shortly

<div id="chart-1-container"></div>
<div id="chart-2-container"></div>

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
      'serverAuth': {
        'access_token': 'get_access_token():'
      }
    });


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
  dataChart1.execute();

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
  dataChart2.execute();

});
</script>