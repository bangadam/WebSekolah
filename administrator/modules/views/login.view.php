<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Area</title>

    <!-- Bootstrap -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="resources/fonts/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="resources/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="resources/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Login Area</h1>
              <?php 
                if (count($message)) {
               ?>
                <div class="alert <?php if($message['success'] == false ) echo "alert-danger"; else echo "alert-success"; ?>">
                  <?php echo $message['message']; ?>
                </div>
               <?php } ?>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              
                <div>
                  <p>©2016 All Rights Reserved. SMKN 1 DLANGGU</p>
                </div>
              
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
