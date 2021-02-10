<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/style1.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            
        <!--FORGET PASS WORD FORM -->
          <form  method="post" action="updatepass.php" class="sign-in-form" >
            <h2 class="title">FORGOT PASSWORD!?</h2>
            <h4 class="">Enter Username and Email</h4>  
            <div class="input-field">
            <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" class="form-control" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" class="form-control" />
            </div>
             <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="New Password" name="newpassword" class="form-control" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm New Password" name="newpasswordc" class="form-control" required/>
            </div>
            <span id = "message" style="color:red"> </span>
      
            <input type="submit" value="Change Pssword" class="btn solid" />
          </form>
          <!-- LOgin  FROM -->
          <form method="post" action="validation.php" class="sign-up-form">
            <h2 class="title">Log in</h2> 
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" placeholder="Username" class="form-control" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" class="form-control" required="">
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                Already Have an Account? Lets Sign In 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Log In
            </button>
                        
          </div>
          <form method="POST">
          <input type="submit" name="button1"
                class="btn transparent" value="sign up" /> </form>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Forgot password?</h3>
            <p>
              Change it here
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Change Password
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
<!-------------------------sign-up END--------------------------->
<script src="app.js"></script>

  </body>
</html>