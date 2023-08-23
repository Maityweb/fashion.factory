<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
&nbsp<img src ="images/logo.jpg">&nbsp&nbsp
  <!--
  <a class="navbar-brand" href="images/logo.jpg">Navbar</a>
-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About Us </a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us </a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="signin.php">Signin </a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="signup.php">Signup </a>
      </li>
    </ul>
    <div>
      <?php 
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
      ?>
      <a href="mycart.php" class="btn btn-outline-success"> My Cart (<?php echo $count; ?>)</a>
    </div>
  </div>
</nav>

</body>
</html>