/**
 * Created by Simon on 27/01/2016.
 */

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
