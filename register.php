<?php 
    // allows the config
    define('__CONFIG__', true);
    //requires it
    require_once "includes/inc_config.php"; 

?>


<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Login</title>

    <base href="/prophet_v1/new/" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <link rel="stylesheet" href="css/admin.css">

  </head>

  <body>
<div class="container_login">
                        <div class="row">
                <H1>Register</H1>
              
                <div >
                    <form class="js-register" action="cms_login.php" method="post">
                        <div class="form-group">
                           
                            <label for="username">Username:</label>
                          <div class="input-group">
                            <span class="input-group-addon">C</span> <input class="form-control" type="text" required='required' name="username" id="username" placeholder="Username">
                            </div>
                           
                            </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <div class="input-group">
                             <span class="input-group-addon">C</span> <input class="form-control" type="password" required='required' name="password" id="password" placeholder="password">
                            </div>
                            </div>
                         
                            <input class="btn btn-info btn-block" type="submit" name="submit" value="Register">
                       
                    </form>
                </div>
                
               </div>
                        </div>
 	<?php require_once "includes/inc_footer.php"; ?>