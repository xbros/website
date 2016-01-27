/**
 * Created by Simon on 27/01/2016.
 */

<script>
var trackOutEvents = function(category, action, label) {
    ga('send', {
        hitType: 'event',
        eventCategory: category,
        eventAction: action,
        eventLabel: label
    });
}
</script>