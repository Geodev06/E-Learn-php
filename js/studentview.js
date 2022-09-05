
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("mySidenav").className ="sidenav unfoldIn";
    document.getElementById("mySidenav").style.display = "block";

    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("mySidenav").className = "sidenav unfoldOut";
}
function Datetime() {
    var today = new Date();
    dt = today.toDateString();
    var n = today.toLocaleTimeString();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    var t = setTimeout(Datetime, 500);
    document.getElementById('lbdate').innerHTML = " Date : "+dt + " "+n;
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
$(window).load(function(){
    document.getElementById("mySidenav").style.display = "none";
});
$(document).ready(function(){
    $('#btclose').click(function(){
        $('#mySidenav').hide(2300,function(){
            document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    });
    });
});