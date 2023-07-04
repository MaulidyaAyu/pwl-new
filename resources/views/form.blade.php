<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="images/icon.jpg" ; type="image/x-icon;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Booking Form </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 3rem; font-weight: 800;">BOOK NOW</p>
			<p class="login-text" style="font-size: 1.2rem; font-weight: 400;">You will discover Venice through the eyes of a real Venetian!</p>
			<div class="input-group">
				<input type="text" placeholder="phone number" name="phone" value="" required>
			</div>
			<div class="main-form">
				<div><input type="date" placeholder="date" name="bdate" value="" required></div>
            </div><br><br>

            <div class="main-form">
				<div>                                               
				<input type="number" placeholder="people ammount" id="people" name="people" min="1" max="36" value="" required>
 				</div>
			</div><br><br>
			
			<div class="main-form">
				<div>
					<select name="destination" id="destination" required>
                
            </select>

				</div>
			</div>
			<div id="submit">
				<button name="submit" class="btn">BOOK</button>
			</div>
		</form>
	</div>
	
	
</body>
</html>