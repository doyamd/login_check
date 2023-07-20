
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journy Furniture Shop</title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    
		<header>
        <div id="logo" >
		
            <p align="left"><a href="Home.html"><img src="images/Logo.png", width="150px",  alt="LOGO" ></a></p>
        </div>
			
        <ul>
		<li><a href="Home.php" target="_top" >HOME</a></li>
        <li><a href="products.php" target="_top">PRODUCTS</a></li>
        <li><a href="signup.php" target="_top">SIGN UP</a></li> 
        <li><a href="aboutus.php" target="_top">ABOUT</a></li>
        <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
		</header>
        
    <div class ="wrapper">
	<div class = "form-box login">
		<h2>LOGIN</h2>
		<form action="login_check.php" method = "POST">
			<div class="input-box">
				<span class="icon"><ion-icon name="mail"></ion-icon></span>
				<input type="email" name = "email" id = "email" required>
				<label>Email</label>
			</div>
            
			<div class="input-box">
				<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
				<input type="password" name="password" id ="password"  required>
				<label>Password</label>
			</div>
			
			<button type="submit" class="btn">SUBMIT</button>
			

			</div>
			
			</div>
		</form>
        <!-- <?php
            
            //require "Signup_check.php";        


?> -->
	</div> 
    </div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
