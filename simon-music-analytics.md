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
    <?php include("test-analytics.js"); ?>
</scripts>
