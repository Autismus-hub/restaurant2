
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/source5.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Login | Janeiro</title>
</head>
<body>

    <section class="toppage">
        
        <div class="wrapper">
           


            <a class="back" href="javascript:history.back()"> <i class="fas fa-arrow-left"></i> Back</a>
            <div class="title-text">
              <div class="title login">
      Login</div>
      <div class="title signup">
      Signup</div>
      </div>
      <div class="form-container">
              <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab">
      </div>
      </div>
      <div class="form-inner">
                <form action = "php/authentication.php" method = "POST" class="login">
                  <div class="field">
                    <input type="text" name="text" placeholder="Email Address" required>
                  </div>
      <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                  </div>
      <div class="pass-link">
      <a href="#">Forgot password?</a></div>
      <div class="field btn">
                    <div class="btn-layer">
      </div>
      <input type="submit" name="login"value="Login">
                  </div>
      <div class="signup-link">
      Not a member? <a href="">Signup now</a></div>
      </form>
      <form action="php/registration.php" method="POST" class="signup">
    
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
        </div>
<div class="field">
  <input type="date" name="date" placeholder="Date of birth" required>
        </div>
<div class="field">
                  <div class="field">
                    <input type="text" name="mail" placeholder="Email Address" required>
                  </div>
      <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                  </div>
      <div class="field">
                    <input type="password" placeholder="Confirm password" required>
                  </div>
      <div class="field btn">
                    <div class="btn-layer">
      </div>
      <input type="submit" name="sign" value="Signup">
                  </div>
      </form>
      </div>
      </div>
      </div>
    </section>
        
        
            <footer>
                <h4>Rue Abourraihan Al Bayrouni, Ariana
                </h4>
                <h2 class="copyright">
                    &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
                </h2>
            </footer>
              <script>
                    const loginText = document.querySelector(".title-text .login");
                    const loginForm = document.querySelector("form.login");
                    const loginBtn = document.querySelector("label.login");
                    const signupBtn = document.querySelector("label.signup");
                    const signupLink = document.querySelector("form .signup-link a");
                    signupBtn.onclick = (()=>{
                      loginForm.style.marginLeft = "-50%";
                      loginText.style.marginLeft = "-50%";
                    });
                    loginBtn.onclick = (()=>{
                      loginForm.style.marginLeft = "0%";
                      loginText.style.marginLeft = "0%";
                    });
                    signupLink.onclick = (()=>{
                      signupBtn.click();
                      return false;
                    });
                  </script>

    </body>
    </html>

  