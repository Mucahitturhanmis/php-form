<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Web Developmnent 2 - TURHANSOFTTECCH.COM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php require_once("navbar.php"); ?>
   

    <div class="container">
      <br/>
      <center>

    <h1>Php Form </h1>
    <br/>

    <?php if(!empty($_POST)); ?>

<br/><br/>

       Hello There <?php echo htmlspecialchars($_POST["name"]); ?>
       <br/><br/>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name : <input type="text" name="name"><br/><br/>
        <input type="submit" class="btn btn-secondary">


       <?php else: ?> 
         
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   Name: <input type="text" name="name"> <br/><br/>
   <input type="submit" class="btn btn-secondary"> 
 </form>

<?php endif; ?> 


</center>
</div>

<br/><br/><br/><br/>
<center><font size="small">Copyright (c) <?php echo $company; ?> - All Rights Reserved </font></center>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
