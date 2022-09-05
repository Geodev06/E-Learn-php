$(document).ready(function(){

	$('#btn_view_all').click(function(){
		window.open("view_all_sched.php");
	});
	$('#set_new').click(function(){
		window.open("set_staff_schedule.php");
	});
	$('#pro_pic').dblclick(function(){

		$('#file').slideDown(500);
		$('#btn_P').slideDown(500);
	});

	$('#show_D').click(function(){
		$('#ffrm').show(1000);
		$('#pss').show(1000);
	});
	$('#show_D').dblclick(function(){
		$('#ffrm').slideUp(1000);
		$('#pss').slideUp(1000);
	});
	$('#show_dcp').click(function(){
		$('#dcp').show(1000);
	});
	$('#show_dcp').dblclick(function(){
		$('#dcp').slideUp(1000);
	});	
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
		$('#btnAd').val("");
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

		$('#btnAd').animate({backgroundPositionX : "30px"},200);
		$('#btnAd').animate({backgroundPositionY : "0px"},200);
		btnAd.style.backgroundSize = "40px";

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
		$('#btnMc').val("Manage Course");
		$('#btnMs').val("Manage Staff");
		$('#btnMa').val("Manage Accounts");
		$('#btnAcc').val("Account Settings");
		$('#btnAd').val("About developer");
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

		$('#btnAd').animate({backgroundPositionX : "10px"},200);
		$('#btnAd').animate({backgroundPositionY : "6px"},200);
		btnAd.style.backgroundSize = "30px";

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

function seen()
{
	var txtNewPass = document.getElementById('Npass');
	var txtCpass = document.getElementById('Cpass');
	var btn = document.getElementById('btl');
	btn.className = "fas fa-eye";
	txtNewPass.type = "text";
	txtCpass.type = "text";
}
function unseen()
{
	var txtNewPass = document.getElementById('Npass');
	var txtCpass = document.getElementById('Cpass');
	var btn = document.getElementById('btl');
	btn.className = "fas fa-eye-slash";
	txtNewPass.type = "password";
	txtCpass.type = "password";
}
function checkPass()
{
	var txtNewPass = document.getElementById('Npass').value;
	var txtCpass = document.getElementById('Cpass').value;
	var ck = document.getElementById('ck');

	if (txtCpass!="") {

		if (txtCpass == txtNewPass) {

			ck.style.visibility = "visible";
		}
		else
		{
			ck.style.visibility = "hidden";
		}
	}
	else
	{
		ck.style.visibility = "hidden";
	}
	if (txtCpass =="") { ck.style.visibility = "hidden"; }
	if (txtNewPass =="") { ck.style.visibility = "hidden"; }
}