<?php 
session_start();
include 'connect.php';

include 'log.php';

include 'errors.php';
include 'success.php';

$errors = array();
$success = array();
noAccount();
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/myjs.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
        $('#mybtnclose').click(function(){
            $('#Cntm').toggleClass("unfoldOut");
            $('#Cnt').slideUp(2300);
        });
        $('#mybtncloseS').click(function(){
            $('#CntmS').toggleClass("unfoldOut");
            $('#CntS').slideUp(2300);
        });
        $('#btnback').click(function(){
            window.close();
        });
    });
</script>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="pt-5">
					<div class="p-5">
						<h1 id="lb">E-Learning System</h1>
						<h6 id="lspu">Laguna State Polytechnic University 2020-2021</h6>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-md-8">
									<hr class="bg-success">
									<ul style="list-style: none;" id="mul" class="p-2">
									  <li><img src="img/128px/bookshelf.png" style="max-height: 40px"> Maximize your time in self studying</li>
									  <li><img src="img/128px/document.png" style="max-height: 40px"> Submit your assigments and projects</li>
									  <li><img src="img/128px/booklet.png" style="max-height: 40px"> Know your schedule and subjects</li>
									  <li><img src="img/128px/security.png" style="max-height: 40px"> Fast and secure</li>
									</ul>
								</div>
								<div class="col-lg-4 col-md-4">
									<div id="divlog">
										<form action="login.php" class="unfold" method="post">
											<br>
											<h6 class="text-center ">Account login</h6>
											<p id="pp">Note : This student E-learning System has been created for education purposes only..</p>
											<br>
										  	<input type="text" name="txtuser" class="inp" id="txtuser" autocomplete="off" placeholder="E.g XXXX-XXXX">
										  	<br>
										  	<input type="password" name="txtpass" class="inp" id="txtpass" placeholder="password...">
										  	<hr>
										  	<div class="text-center">
										  		<input type="submit" name="btn_log" class="mybtn" value="Proceed"><br>
										  		<a href="forgotpass.php" class="lnk"><i class="fas fa-question-circle"></i> I forgot my password</a>
										  	</div>
										</form>
									</div>
									<div id="divsignup"> 
										<form action="" class="unfold" method="post">
											<br>
											<h6 class="text-center ">Account activation</h6>
											<p id="pp">Note : let us verify if your student ID is valid, before you can aquire some priviledges in this E-Learning System. <span class="glyphicon glyphicon-education"></span></p>
											<br>
										  	<input type="text" name="txtAct" class="inp" id="txtuser" autocomplete="off" placeholder="E.g XXXX-XXXX">
										  	<br>
										  	<div class="">
											  <label for="sel1" id="lbl">Select Course:</label>
											 								               <select class="cb" id="sel1" name="txtCourse">
								                <option>--Choose one--</option>
								                  								                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
								                  								                    <option value="Bachelor of Science in Data Science">Bachelor of Science in Data Science</option>
								                  								                    <option value="Bachelor of Science in facebook hacking">Bachelor of Science in facebook hacking</option>
								                  								                    <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
								                  								                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
								                  								                  <option>N/A</option>
								               </select>
											</div>
										  	<hr>
										  	<div class="text-center">
										  		<input type="submit" name="btn_activate" class="mybtnA" value="Activate now"><br>
										  		<br>
										  		<p class="lnk" id="ppp" onclick="showlog()"><i class="glyphicon glyphicon-ok-circle"></i> I have already an account.</p>
										  	</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="menu">
			<input type="button" name="" value="Activate my Account" id="btshowsign" onclick="showsign()">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer text-center text-white pt-5">
					<p id="reserved">All rights reserved © 2019 Ageo agnote</p>
				</div>
			</div>
		</div>
	</div>

</body></html>