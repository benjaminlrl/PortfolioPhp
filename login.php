<?php require "sessionStart.php";?>
<?php if(!isset($_SESSION["user_email"]))$titlePage="Se connecter";else $titlePage="Se déconnecter";?>
<?php require "head.php";?>
<body class="body-login">

<section class='section-login' id='section-login'>
    <?php require 'header.php';?>
    <?php if(!isset($_SESSION["user_email"])){echo("
    <main class='login-main'>
        <div class='wrapper-login'>
            <form action='submitLogin.php' method='POST'>");
                if($langue ==="français")echo("
                <h1>Se connecter</h1>
                <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domaine.com' name='user_email' required>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>

                <div class='remember-forgot-login'>
                    <label><input type='checkbox'>Se souvenir de moi</label>
                    <a href='#'>Mot de passe oublié ?</a>
                </div>
                <button type='submit'class='btn-submit-login'>Se connecter<i class='fa-solid fa-right-to-bracket'></i></button>

                <div class='register-link-login'>
                    <p>Vous n'avez pas de compte ? <a href='register.php'>S'inscrire</a></p>
                </div>");
                if($langue ==="english")echo("
                <h1>Login</h1>
                <div class='input-box-login'>
                    <input type='email' placeholder='exemple@domaine.com' name='user_email' required>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <div class='input-box-login'>
                    <input type='password' placeholder='password' name='user_password'required>
                    <i class='fa-solid fa-lock-keyhole' style='color: #fff;'></i>
                </div>

                <div class='remember-forgot-login'>
                    <label><input type='checkbox'>Remember me</label>
                    <a href='#'>Forgot password ?</a>
                </div>
                <button type='submit'class='btn-submit-login'>Login<i class='fa-solid fa-right-to-bracket'></i></button>

                <div class='register-link-login'>
                    <p>Don't have account ?<a href='register.php'>Register</a></p>
                </div>");
            echo("</form>
        </div>
    </main>
</section> 
");} else echo("<main class='login-main'>
        <div class='wrapper-login'>
            <form action='submitLogout.php' method='POST'>");
            if($langue ==="français")echo("
                <h1>Se déconnecter</h1>
                <div class='input-box-login'>
                    <h3>" .htmlspecialchars($_SESSION['user_email']). "</h3>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Se déconnecter<i class='fa-solid fa-right-from-bracket'></i></button>");
                if($langue ==="english")echo("
                <h1>Logout</h1>
                <div class='input-box-login'>
                    <h3>" .htmlspecialchars($_SESSION['user_email']). "</h3>
                    <i class='fa-solid fa-user' style='color: #fff;'></i>
                </div>
                <button type='submit'class='btn-submit-login'>Logout<i class='fa-solid fa-right-from-bracket'></i></button>");
            echo("</form>
        </div>
    </main> 
</section> ")?>


<?php require "footer.php";?>
