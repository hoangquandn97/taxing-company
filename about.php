<!DOCTYPE html>
<html lang="en">
<head>
  <title>About page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.bg-2 { 
  background-color: #474e5d; /* Dark Blue */
  color: #ffffff;
}
.margin {margin-bottom: 45px;}
.container-fluid-2 {
  padding-top: 70px;
  padding-bottom: 70px;
}
</style>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Taxing</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="vulnerabilities/upload/index.php">Documents</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <h1>TAXING</h1>
    <p>We take care of your tax</p> 
  </div>
  
  <div class="container-fluid-2 text-center">
    <h3 class="margin">Service</h3>
    <p>At Taxing, you can have a peace of mind with your tax procedures. We will take care of everything for you.</p>
  </div>
  <div class="container-fluid-2 bg-2 text-center">
    <h3 class="margin">Contact us</h3>
    <p>Email: service@taxing.com.au</p>
    <p>Phone: +61412345678</p>
    <p>Address: Perth, Australia</p>
    <a href="#" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-search"></span> Search
    </a>
  </div>

</body>
</html>