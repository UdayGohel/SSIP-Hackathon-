<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send main</title>
</head>
<body>

        <h1>OTP Based 2-Step Login Verification</h1>
        
        

    <div class="container email-container">
        <h2>Enter Email</h2>
        <form action="mail.php" method="POST" class="form email-form">
            <input type="email" required name="email" id="email" placeholder="Enter Email...">
            <span class="email-error"></span>
            <button name = "sub" class="btn email-submit"  >SEND OTP</button>
             
        </form>
    </div> 
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #ffffff, #427de3);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: white;
            position: relative;
            height: 680px;
            width: 360px;
            box-shadow: 0px 0px 24px #567896;
            border-radius: 26px;
            text-align: -moz-center;
            padding: 50px 20px;
        }

        .Options {
            padding-left: 37px;
            display: flex;
            text-align: center;
        }

        .Answer {
            padding-left: 40px;
        }

        .button__text {
            text-align: center;
            background: #fff;
            font-size: 20px;
            margin-top: -26px;
            width: 118px;
            padding: 7px 10px;
            border-radius: 6px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 509;
            /* display: flex; */
            align-items: center;
            display: block;
            color: #48789d;
            box-shadow: 0px 2px 2px #568496;
            cursor: pointer;
            transition: .2s;
        }

        .submit {
            border: 0px;
        }

        .screen_background_shape {
            /* padding-left: 39px; */
            font-size: 30px;
        }
        .button__icon {
	
	align-items:center;
	font-size: 24px;
	margin-left:0px;
	color: #75a3b5;
}
        .login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #67849e;
}
.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #67899e;
}
.login__submit {
    text-align: center;
	background: #fff;
	font-size: 20px;
	margin-top: 30px;
	padding: 7px 10px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 509;
	/* display: flex; */
	align-items: center;
	width: 100%;
	color: #487a9d;
	box-shadow: 0px 2px 2px #567996;
	cursor: pointer;
	transition: .2s;
	
}
.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	/* padding-left: 66px; */

	font-weight: 700;
	width: 100%;
	transition: .2s;
    text-align: center;
}
.logo{
    align-items: center;
    padding-left:100px;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="title">
            <div class="logo">
                <img src="https://i.pinimg.com/originals/4f/b0/e9/4fb0e97748d350e0e1e28e653db197bc.gif"
                                class="img-fluid profile-image-pic img-thumbnail my-3" width="120px" height="120px" alt="profile">
                            </div>
            </div><br><br>
            <div class="text text-center">
            <span class="screen_background_shape"> Enter Email </span>
        </div>
        <br>
        <br>
            <form action="mail.php" method="POST" class="form email-form">
                <i class="login__icon fas fa-user"></i>
                <input type="email" required name="email" id="email" class="login__input" placeholder="Enter Email...">
                <span class="email-error"></span><br>
                <button name = "sub" class="btn button__icon button__text login__submit email-submit"  >SEND OTP</button>
                 <!-- <input name='sub' type="submit" class="btn email-submit">  -->
            </form>
        </div>
    </div>
</body>

</html>
