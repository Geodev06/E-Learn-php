function showsign() {
	var div = document.getElementById('divlog');
	var signup = document.getElementById('divsignup');
	div.style.display="none";
	signup.style.display = "block";
}
function showlog()
{
	var divlog = document.getElementById('divlog');
	var signup = document.getElementById('divsignup');
	signup.style.display="none";
	divlog.style.display = "block";
}
$(document).ready(function(){
	$('#btnclear').click(function(){
		$('#txtuserR1').val("");
		$('#txtuserR11').val("");
		$('#txtuserR111').val("");
		$('#txtuserRE').val("");
		$('#txtuserR2').val("");
		$('#txtuserREC').val("");
	});
});