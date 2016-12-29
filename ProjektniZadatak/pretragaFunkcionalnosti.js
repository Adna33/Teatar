function predloziPretragu(str) {
    if (str.length == 0) {
        document.getElementById("predlozi").innerHTML = "";
        document.getElementById("predlozi").style.border = "2px";
        return;
    }
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("predlozi").innerHTML = this.responseText;
            document.getElementById("predlozi").style.border = "1px solid #FFFFFF";
            document.getElementById("predlozi").style.backgroundColor ="#eee";
        }
    }
    xmlhttp.open("GET", "predlozi.php?q=" + str, true);
    xmlhttp.send();
}