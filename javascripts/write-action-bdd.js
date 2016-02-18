/**
 * Created by Simon on 18/02/2016.
 */



var writeActionBdd = function(action, type, son)
{
    var lienPhp = "http://xbros.tspace.fr/bdd/sql_write-new-action.php?action=" + action + "&type=" + type + "&son=" + son;
    var returnElement = "errors";
    ajaxMysqlRequest(lienPhp, returnElement);
};

var ajaxMysqlRequest = function(lienPhp, returnElement)
{
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(returnElement).innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET",lienPhp,true);
    xmlhttp.send();
};

