<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Al shifa Hospital</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="JannaLTRegular.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">
	<div class="main">
		<div class="logo">
			<img src="images/logo.png">
			<h2> Al Shifaa Hospital</h2>
		</div>
		<div class="book">
			<P>Welcome to Al-Shifa Hospital. For reservations, fill out the form below</P>
			<!-- <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="text" placeholder="أدخل البريد الالكتروني" name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="احجز الان" name="send"/>
            </form> -->
<div class="container w-50">
<form action="index.php" method="post">
				<div class="mb-3">
					<label class="form-label">Patient name</label>
					<input type="text" class="form-control" placeholder="Enter your name" name="name">
				</div>
				<div class="mb-3">
					<label class="form-label">Email</label>
					<input type="text" class="form-control" placeholder="Enter your email address" name="email">
				</div>
				<div class="mb-3">
					<label class="form-label">Date</label>
					<input type="date" class="form-control" placeholder="Enter your Date " name="date">
				</div>
				<input type="submit" value="Book now" name="send"/>
			</form>
</div>


			<?php
			error_reporting(0);
			// الاتصال بالسيرفر او قاعدة
			$host               = "localhost";
			$user               = "root";
			$password      = "";
			$dbName       = "hospital";

			$conn = mysqli_connect($host, $user, $password, $dbName);

			// ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

			if ($_POST['send']) {

				$pName            = $_POST['name'];
				$pEmail           = $_POST['email'];
				$pDate            = $_POST['date'];

				$query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
				$result = mysqli_query($conn, $query);
				echo "<p style='color:green'>" . "تم الحجز" . "</p>";
			} else {
				echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
			}

			?>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>