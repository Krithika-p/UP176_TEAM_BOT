<!-- index.html -->
<html>
  <head>
      <meta name=viewport content="width=device-width, initial-scale=1">
      <title>Rasa Chatbot Sign In</title>
      <link rel="icon" href="favicon.png" type="image/x-icon">
      <!--Google font -->
      <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@100;200;300;400;500;600;700;800;900&amp;family=Arimo:wght@100;200;300;400;500;600;700;800;900&amp;subset=latin&amp;display=swap" rel="stylesheet">
      <!-- Bootstrap CSS and other libraries for fonts and icons-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- our stylesheets -->
      <link rel="stylesheet" href="login.css">
      
    </head>
          <body>
<!--Navbar-->
<nav class="navbar navbar-light navbar-custom navbar-expand-lg">
	<div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="logomed.png" alt="">
  </a>
</div>
</nav>
<!--End of Navbar-->
<!--Start of Login form-->
        <div class="container">
            <div class="row">
            <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-arimo"></div>
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">Sign In</h5>
                  <form class="form-signin" action="login.php" method="POST">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control"name = "email" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Email address</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
      
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
      
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <hr class="my-4">
      
                    <div id="sign-in">
                      <p>Not a member?<a href="Sign Up.html"> Register</a></p>

                      <?php
                      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl, "login=error")== true)
                      { 
                          echo "<div class='error'>Invalid Email id/Password</p>";
                
                      }
                      ?>
                      </div> 
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!--End of Login form-->

</body>
</html>
