<!DOCTYPE html>
<html lang="es"> 


<head>
  <title>My Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/click.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>A bootstrap test</h1>
  <p>Resize me.</p>
  <div class="row">
    <div class="col-sm-8" style="background-color:lavender;"><img id="myrubik" onclick="changeImage()" src="foto.png">
      <div class="row">
        <div class="col-sm-6" style="background-color:lavenderblush;"><?php include "db.php";?></div>
        <div class="col-sm-6" style="background-color:lavenderblush;"><img src="foto.png"></div>
      </div>
    </div>
    <div class="col-sm-4" style="background-color:lavenderblush;">
    <form action="theSamePage.php" method="post">
    <input type="button" value="A button">
    </form>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-10" style="background-color:lavenderblush;"><img src="foto.png"></div>
</div>
</div>

</body>



</html>


