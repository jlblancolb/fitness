<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/login.js"></script>
<meta charset="utf-8">
<title>Fitness19 - Login</title>
</head>

<body>
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
	<div class="logo"><img src="img/logo_over.png" > </div>
	<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Dirección email" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuérdame
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                ¿Recordar contraseña?
            </a>
        </div><!-- /card-container -->
</div><!-- /container -->
</body>
</html>