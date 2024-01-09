<?php

if(isset($_POST["btn"]))
{
    session_start();
    $email=$_SESSION["uid"];
    $password=$_SESSION["upass"];
    
    $rid=$_POST["t2"];
    $subject=$_POST["t3"];
    $message=$_POST["t4"];
    include "connect.php";

    session_start();
    $email=$_SESSION["uid"];

    
    // email os sender id ....... !important 

        $ss="INSERT INTO `compose`(`email`, `receiverid`, `subject`, `message`, `curdate`, `curtime`, `senderid`) VALUES ('$email','$rid','$subject','$message',curdate(),curtime(), '$email')";

        // $ss="insert into compose values('$email','$rid','$subject','$message',curdate(),curtime())";

   echo("\n Query : $ss \n"); // To Check Whether Query Is Running Successfully Or Not .... 

        mysqli_query($con,$ss);

        echo"<script>alert('The Message Has Been Sent Successfully')</script>";

        if($email==""&&$password=="")
        header("location:login.php");
}

?>
<html>
    <head>
        <title>Compose Mails</title>

    <!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


<link rel="stylesheet" href="./s.scss">
<link rel="stylesheet" href="_modal.scss">
<style>
  .modal-backdrop {
    --bs-backdrop-zindex: none !important;
 }
  .offcanvas-backdrop.show {
    opacity: 0;
}
#exampleModal{
  margin-right:560px !important;
  margin-top:50px !important;
}
.compose{
    margin-top:250px !important;
    margin-right:50px !important;
}
</style>
    </head>
    <body>
         <div align="center">

            <div >
                <input type="submit" name="btn" value="Compose" class="btn btn-secondary text-white fw-bold btn-lg mt-3 mb-4 compose " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"></input>
            </div>

             <div class="modal fade" id="exampleModal" tabindex="-1
             " aria-labelledby="exampleModalLabel" aria-hidden="true" class="margin1">
             
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                    <div class="text-dark modal-title">New Message</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="email" name="t2" class="form-control" id="recipient-name" placeholder="To" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="t3" class="form-control" id="recipient-name" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="t4" id="message-text" cols="35" rows="10" placeholder="Leave Your Message" required></textarea>
                        </div>
                        <div align="right">
                            <button type="submit" name="btn" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>