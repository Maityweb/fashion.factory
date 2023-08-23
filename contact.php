<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style type="text/css">

.main-btn{

  display: inline-block;
  border-radius: 50px;
  padding: 10px 27px;
  color: #e81922;
  border: 1px solid #e81922;
  text-transform: uppercase;
  letter-spacing: 1px;
  background: linear-gradient(to right,#e81922 50%,transparent 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: 0.5s ease-out;
}

.main-btn:hover{

  color: whitesmoke;
  background-position: left bottom;
}


</style>
</head>

<body>

<div class="container mt-4" id="about">
				<div class="row">
					<div class="col-lg-5 col-md-5 mt-4">
						<img src ="image/12.jpg" style="height: 600px; width: 100%;opacity: 0.90;">
					</div>
<div class="col-lg-6 col-md-5  pt-4 px-3" id="a" >

<div class="container-fluid bg-light mt-0">

<div class="row justify-content-center">
		<div class="col-lg-10"> 
    <h2 style="font-family:Times New Roman;font-size: 40px; Georgia, Serif;letter-spacing: 3px;color: black; margin-top: 5%;color: #1a2a6b";><b>Contact</b></h2>
    <br>
    <p style="justify-content: left; font-family:Times New Roman;font-size: 20px; Georgia, Serif; ">
         We produce the different types of shirt, T-Shirt, etc. in our factory. Our fashion factory made latest design, we look all time to provide different types of dresses, 
      like - 3d Tiger T-shirt, Casual T-shirt, Double shades, Flag T-shirt, Iron man T-shirt, Shirt, etc... </p><br>
    <p style=" font-family:Times New Roman, Georgia, Serif;font-size: 20px;color: #607d8b"><b>B/31 2 No. Airport Gate Milanpally, Kolkata 700079, West Bengal, India</b></p>
    <p style="justify-content: left; font-family:Times New Roman; font-size: 20px; Georgia, Serif;">You can also contact us by phone <b>6290484032</b> or email <b>prosayan1234@gmail.com</b>, or you can send us a message here:</p><br>
    <form action="connect.php" method="post">
      <p><input  class="form-control" type="text" placeholder="Name" name="name"></p><br>
      <p><input  class="form-control" type="text" placeholder="Enter your email-id" required="" name="email"></p><br>
      <!-- <p><input  class="form-control" type="text"  required="" name="msg"></p><br> -->

      <p><textarea class="form-control" rows="3" cols="35" placeholder="Message \ Special requirements" name="message"></textarea></p><br>
      <p><button class="main-btn" name="submit" type="submit" id="bt" action="index.php">SEND MESSAGE</button></p>
      <a href="index.php" class="text-primary fw-bold text-decoration-none"></a>

    </form>
  </div>
</div>


</body>
</html>