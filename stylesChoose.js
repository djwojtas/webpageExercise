function showCSSlist() {
  var styles = document.getElementsByTagName("link");
  for(var i = 0; i<styles.length; ++i) {
    document.getElementById("styleList").innerHTML += '<button onclick="enableCSS(' + i + ')">' + styles[i].getAttribute("title") + '</button>';
  }
}

function disableAllCSS() {
  var styles = document.getElementsByTagName("link");
  for(var i = 0; i<styles.length; ++i) {
    styles[i].disabled = true;
  }
}

function setCSSCookie(cname, cvalue) {
  var d = new Date();
  d.setTime(d.getTime() + (30*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCSSbyCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return parseInt(c.substring(name.length, c.length));
        }
    }
    return 0;
}

function enableCSS(toEnable) {
  disableAllCSS();
  var styles = document.getElementsByTagName("link");
  styles[toEnable].disabled = false;
  setCSSCookie("css", toEnable)
}

window.onload = function() {
  showCSSlist();
  enableCSS(getCSSbyCookie("css"));
}