<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title><?php include("title-footer/title.php");?></title>
</head>
<body>

    <?php include ("banner/banner.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">

                <div class="loginBox">
                   
                   <form name="form1" id="form1" method="post" action="adminCheck.php">

                     <fieldset class="form-group">
                       <label for="formGroupExampleInput"><i class="fas fa-user-circle"></i> Username</label>
                       <input type="text" name="user" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                     </fieldset>
                     <fieldset class="form-group">
                       <label for="formGroupExampleInput2"><i class="fas fa-unlock"></i> Password</label>
                       <input type="password" name="pass" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
                     </fieldset>
                    <button type="submit" class="btn btn-success btn-block"><i class="fas fa-key"></i> Login</button>

                   </form>

                </div>

            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">


          </div>
      </div>
  </div>
  <?php include("title-footer/footer.php") ?>

  <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
  <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
  <script type="text/javascript" src="MDB/js/popper.js"></script>
</body>
</html>