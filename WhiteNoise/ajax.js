var http_request = false;
function send_request(url) {
    url = url + "&rand=" + new Date().valueOf();
    http_request = false;
    if (window.XMLHttpRequest) {
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType("text/xml");
        }
    } else if (window.ActiveXObject) {
        try {
            http_request = new ActiveXObject("Msxml2.XMLHttp");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHttp");
            } catch (e) {
                alert("Wrong Browser");
                return false;
            }
        }
    }
    if (!http_request) {
        window.alert("Failure");
        return false;
    }
    http_request.onreadystatechange = processrequest;
    http_request.open("GET", url, true);
    http_request.send(null);
}
function processrequest() {
    if (http_request.readyState == 4) {
        if (http_request.status == 200) {
            document.getElementById(reobj).innerHTML = http_request.responseText;
        } else {
            alert("Something wrong with the page request!");
        }
    }
}
function do_ajax(obj, url) {
    send_request(url);
    reobj = obj;
}