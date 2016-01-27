---
title: Simon - Musique - Analytics **BETA**
---

<section id="auth-button"></section>
<section id="view-selector"></section>
<section id="timeline"></section>


<script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  var CLIENT_ID = '19511382016-7q1j8rp56s1t11u5idu2aflgqfvug5t8.apps.googleusercontent.com';

  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: CLIENT_ID,
  });
  
  var viewSelector = new gapi.analytics.ViewSelector({
      container: 'view-selector'
    });
  
    var timeline = new gapi.analytics.googleCharts.DataChart({
      reportType: 'ga',
      query: {
        'dimensions': 'ga:date',
        'metrics': 'ga:sessions',
        'start-date': '30daysAgo',
        'end-date': 'yesterday',
      },
      chart: {
        type: 'LINE',
        container: 'timeline'
      }
    });
  
    gapi.analytics.auth.on('success', function(response) {
      viewSelector.execute();
    });
  
    viewSelector.on('change', function(ids) {
      var newIds = {
        query: {
          ids: ids
        }
      }
      timeline.set(newIds).execute();
    });
  });
</script>