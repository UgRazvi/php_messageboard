<?php
if(isset($_POST["btn"]))
{
    $name=$_POST["t1"];
    $number=$_POST["t2"];
    $mail=$_POST["t3"];
    $password=$_POST["t4"];
    include "connect.php";
        $s="insert into createac values('$name','$number','$mail','$password')";
        
        // echo("\n Query : $s \n"); // To Check Whether Query Is Running Successfully Or Not .... 
        
        mysqli_query($con,$s);
        echo"<script>alert('Account Create Successfully')</script>";
}
?>
<html>
    <head>
        <title>Create New Account</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    </head>   
    <body>
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card " style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">
          <form method="post">
            <div class="md-5 mt-md-4 pb-1">
              <img src="./logo.png" alt="" width=90px height=40px>
              <h2 class="fw-bold mb-4 mt-2">Sign Up Account</h2>
                <br>
              <div class="form-outline form-white mb-4">
                <input type="text" name="t1" placeholder="Full Name" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="t2" placeholder="Contact Number" id="typePasswordX" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" name="t3" placeholder="E-mail Id" id="typePasswordX" class="form-control form-control-lg" />
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="t4" placeholder="Create Password" id="typePasswordX" class="form-control form-control-lg" />
              </div>
              <input type="submit" name="btn" value="Create Account" class="btn btn-primary text-white fw-bold btn-lg px-5">
              <p class="mt-2" align="center"><a class="text-primary fw-bold" href="login.php">Log-in</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>

</html>