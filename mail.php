<?php 
	
	if(isset($_POST['submit'])){

		$firstName = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lastName =  filter_var($_POST['lname'], FILTER_SANITIZE_STRING);

		$emailId =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) ;
		$phoneNumber =  filter_var($_POST['phoneNumber'],FILTER_SANITIZE_NUMBER_INT);

		$hospitalName = filter_var($_POST['hospitalName'], FILTER_SANITIZE_STRING);
		$surgeryName = filter_var($_POST['surgeryName'], FILTER_SANITIZE_STRING);
		$quary = filter_var($_POST['quary'], FILTER_SANITIZE_STRING);
		

		if ($firstName == NULL || $lastName == NULL || $emailId== NULL && $phoneNumber== NULL || $hospitalName== NULL || $surgeryName== NULL ||$quary== NULL) {
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Hello!</strong> Please enter valid Email-id and phone Number Or Fill all inputs.
				</div>';
		} else{
			$date = date("d/m/Y");
			$year = date("Y");
			$message = '
						<html>
						<head>
							<title>'.$surgeryName.'</title>
						</head>
						<body>
								<div style="height: 100%; width: 100%;;  padding: 100px 0px; background-color: #20c997;">
			<div style=" width: 70%; margin: 0px auto;">
			<div style="width: 100% ; padding: 20px 0px; background-color: #d9dada;">
			<span style=" padding: 40px;"> <img style="height: 50px ;" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/63/IMG_%28business%29.svg/330px-IMG_%28business%29.svg.png" alt="fggf"></span>
		</div>
		<br><br>
		<div style="width: 100%;background-color: #d9dada;">
			<div style="width: 80% ;margin: 0px auto; padding: 50px 0px;" >
				<h3 style="font-weight:100; font-size:30px">Hello Dog,</h3>
				<br>

				<div style="background-color: lightgray; padding: 20px 0px;">
					<div style="padding: 30px 3%; width: 93%">
						<h1 style="font-size: 30px; font-weight:100">Client: </h1>
						<p> Date '.$date.'</p>
						<hr>
						<br> <br>
						<div style="padding-left: 10px;">
							<div >
								<div style="width:30%; float: left;"> <p>Name :</p> </div>
								<div><p>'.$firstName.' '.$lastName.'</p></div>
								<br>
								<div style="width:30%; float: left;"> <p>Emai id :</p> </div>
								<div><p>'.$emailId.'</p></div>
								<br>
								<div style="width:30%; float: left;"> <p>Phone Number :</p> </div>
								<div><p>'.$phoneNumber.'</p></div>
								<br>
								<div style="width:30%; float: left;"> <p>Hospital Name:</p> </div>
								<div><p>'.$hospitalName.'</p></div>
								<br>
								<div style="width:30%; float: left;"><p>Surgery :</p> </div>
								<div><p>'.$surgeryName.'</p></div>
								<br>
							</div>
						</div>
					</div>
				</div>
				<br> <br>
				<div>
					<h2 style="font-size: 40px; font-weight: 300;">Discription</h2>
					<br>
					<hr>
					<br><br>
					<p style="text-align:justify;">'.$quary.'
					</p>
				</div>
			</div>
		</div>
		<div style="text-align: -webkit-center; margin-top: 0px; padding: 20px 0px; background-color: darkorange;">
			<p >
				© '.$year.' Surgery in Bahrain , zxc zxc zcc, asd assa sas, IND
			</p>
		</div>
		</div>
	</div>

						</body>
						</html>';



//design header

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Surgery Bahrain <mauryanavis@gmail.com>';
$headers[] = 'From: '.$firstName.' '.$lastName.' <'.$emailId.'>.';

// Mail send

		$done =mail('mauryanavis@gmail.com', $surgeryName, $message, implode("\r\n", $headers)); 
		if (isset($done)) {
			echo '<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Thank You! '.$firstName.'!</h4>
					  <p>You Have successfully sent message. Our XYZ will contact you as soon as possible.</p>
  					<hr>
				</div>';
		}
		else{
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>! </strong>Sorry Details can’t sent. We are facing some technical problems.
				</div>';
		}
	} 
}
 ?>