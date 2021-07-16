<?php 

$conn = mysqli_connect("localhost","root","","game");

  extract($_POST);

    if(isset($_POST['fullname'])&& isset($_POST['mobile'])&& isset($_POST['email'])&&isset($_POST['address'])){
        $query = "INSERT INTO crudtable(fullname,mobile,email,address) VALUES ('$fullname','$mobile','$email','$address')";
        

        mysqli_query($conn,$query);
    }
