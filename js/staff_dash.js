$(document).ready(function(){
	$('#pnlc').click(function(){
		var btndash = document.getElementById('btndash');
		var btnMc = document.getElementById('btnMc');
		var btnMs = document.getElementById('btnMs');
		var btnMa = document.getElementById('btnMa');
		var btnAcc = document.getElementById('btnAcc');
		var btnAd = document.getElementById('btnAd');
		var btnlogout = document.getElementById('btnlogout');
		$('#sidenav').animate({width : "100px"},400);
		$('#profile').animate({maxHeight :"60px",maxWidth : "60px"},400);
		$('#btndash').val("");
		$('#btnMc').val("");
		$('#btnMs').val("");
		$('#btnMa').val("");
		$('#btnAcc').val("");
		$('#btnlogout').val("");
		$('#name').animate({fontSize : "10px"},200);
		$('#lbad').animate({fontSize : "12px"},200);
		//bgrnds
		$('#btndash').animate({backgroundPositionX : "30px"},200);
		$('#btndash').animate({backgroundPositionY : "0px"},200);
		btndash.style.backgroundSize = "40px";

		$('#btnMc').animate({backgroundPositionX : "30px"},200);
		$('#btnMc').animate({backgroundPositionY : "0px"},200);
		btnMc.style.backgroundSize = "40px";

		$('#btnMs').animate({backgroundPositionX : "30px"},200);
		$('#btnMs').animate({backgroundPositionY : "0px"},200);
		btnMs.style.backgroundSize = "40px";

		$('#btnMa').animate({backgroundPositionX : "30px"},200);
		$('#btnMa').animate({backgroundPositionY : "0px"},200);
		btnMa.style.backgroundSize = "40px";

		$('#btnAcc').animate({backgroundPositionX : "30px"},200);
		$('#btnAcc').animate({backgroundPositionY : "0px"},200);
		btnAcc.style.backgroundSize = "40px";

		$('#btnlogout').animate({backgroundPositionX : "30px"},200);
		$('#btnlogout').animate({backgroundPositionY : "0px"},200);
		btnlogout.style.backgroundSize = "40px";

		$('#main').animate({left : "100px"},400);
		$('#main2').animate({left : "100px"},400);
	});
	$('#pnlcS').click(function(){
		$('#main').animate({left : "250px"},400);
		$('#main2').animate({left : "250px"},400);
		var btndash = document.getElementById('btndash');
		var btnMc = document.getElementById('btnMc');
		var btnMs = document.getElementById('btnMs');
		var btnMa = document.getElementById('btnMa');
		var btnAcc = document.getElementById('btnAcc');
		var btnAd = document.getElementById('btnAd');
		var btnlogout = document.getElementById('btnlogout');

		$('#sidenav').animate({width : "250px"},400);
		$('#profile').animate({maxHeight :"100px",maxWidth : "100px"},400);
		$('#btndash').val("Dashboard");
		$('#btnMc').val("My Schedule");
		$('#btnMs').val("My Class");
		$('#btnMa').val("Set Projects");
		$('#btnAcc').val("Account Settings");
		$('#btnlogout').val("logout");
		$('#name').animate({fontSize : "16px"},200);
		$('#lbad').animate({fontSize : "14px"},200);
		//bgrnds
		$('#btndash').animate({backgroundPositionX : "10px"},200);
		$('#btndash').animate({backgroundPositionY : "6px"},200);
		btndash.style.backgroundSize = "30px";

		$('#btnMc').animate({backgroundPositionX : "10px"},200);
		$('#btnMc').animate({backgroundPositionY : "6px"},200);
		btnMc.style.backgroundSize = "30px";

		$('#btnMs').animate({backgroundPositionX : "10px"},200);
		$('#btnMs').animate({backgroundPositionY : "6px"},200);
		btnMs.style.backgroundSize = "30px";

		$('#btnMa').animate({backgroundPositionX : "10px"},200);
		$('#btnMa').animate({backgroundPositionY : "6px"},200);
		btnMa.style.backgroundSize = "30px";

		$('#btnAcc').animate({backgroundPositionX : "10px"},200);
		$('#btnAcc').animate({backgroundPositionY : "6px"},200);
		btnAcc.style.backgroundSize = "30px";

		$('#btnlogout').animate({backgroundPositionX : "10px"},200);
		$('#btnlogout').animate({backgroundPositionY : "6px"},200);
		btnlogout.style.backgroundSize = "30px";
	});

	$('#lg').click(function(){
		document.getElementById('main2').style.display="block";
		document.getElementById('main').style.display="none";
	});
	$('#clslog').click(function(){
		document.getElementById('main').style.display="block";
		document.getElementById('main2').style.display="none";
	});
});
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