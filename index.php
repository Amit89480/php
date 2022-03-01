<?php
$insert =false; 
if(isset($_POST['name'])){


$server ="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con){
    die ("connection to this database failed".mysqli_connect_error());

}
// echo "We are connected to database";
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO `trip`.`trip` (`Name`, `Gender`, `Email`, `Phone`, `Address`, `dt`) VALUES ('$name', '$gender', '$email', '$phone', '$address', current_timestamp());";
//  echo $sql;

if($con->query($sql)==true){
    $insert =true;
    //  echo "Successfully Inserted";
}
else{
    // echo "error:$sql<br>$con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet" />
</head>

<body>
    <img src="bg.jpg" alt="image" class="image" />
    <div class="container">
        <h3>Welcome to bengal college of engineering and technology Travel</h3>
        <p>Enter your details</p>
        <?php
        if($insert==true){
       echo  "<p>Thanks for submitting the form.We will contact you soon</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" />
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" />
            <input type="email" name="email" id="email" placeholder="Enter your email" />
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone" />
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your address"></textarea>
            <button class="btn">Submit now</button>
            <button class="btn">Reset</button>
        </form>
    </div>
</body>


</html>