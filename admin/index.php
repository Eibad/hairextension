<?php
include "../connection.php";
session_start();
$error = "";
if(isset($_POST) AND count($_POST) > 0){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql ="SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_assoc($result);
    if(isset($row) AND count($row)){
      $_SESSION["id"] = $row['id'];
      $_SESSION["name"] = $row['firstname']." " . $row['lastname'];
      $_SESSION["email"] = $row['email'];

      header("location:products.php");
      //echo "Login Done!";
    }
  }
  else {
    $error = "Login Failed!";
  }
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04a2aa;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <!-- <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <h1>Admin Login</h1>

           

                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="email" required name="email" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" required name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->







<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">

<form action="index.php" method="post">
  <div class="imgcontainer">
    <h2>Admin Login</h2>
<?php if(!empty($error)) {?>
                  <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $error;?>
                  </div>
                <?php } ?>
  </div>

  <div class>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
