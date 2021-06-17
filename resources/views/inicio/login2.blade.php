<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="Login/fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="Login/css/style.css">
</head>
<body>
 @if($msj!="")
       
        <div class="alert alert-success" role="alert">{{$msj}}</div>
        @endif
    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
                 
                <form method="POST" class="signup-form" action="{{'principal'}}">
                     @csrf
                    <h2 class="form-title">CREAR USUARIOS ?</h2>
                    
                    <div class="form-textbox">
                        <label for="name">Full name</label>
                        <input type="text" name="name" id="name" required="" />
                    </div>

                    <div class="form-textbox">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" required="" />
                    </div>
                        <div class="form-textbox">
                        <label for="rol">Rol</label>
                        <input type="text" name="rol" id="name" required="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="CREAR CUENTA" />
                    </div>
                    <br>
                    <div><a href="categoria"><input type="button" class="submit" id="va" value="Volver Atraz" /></a> </div>
                </form>

                <p class="loginhere">
                    Already have an account ?<a href="#" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>