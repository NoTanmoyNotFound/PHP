<?php 

if(isset($_POST['name'])){

    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    //creating connection
    $con = mysqli_connect($server, $username, $password);
    //check for connection success
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Sucess connecting to the DataBase.....";
    //collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $desc= $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;
    //execute the qurey
    if($con->query($sql) == true){
        // echo "successfully inserted.........";
        //flag for insersiontr
        $insert =true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    // close the database connection 
    $con -> close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bj.jpg" alt="DHS">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        
        

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="email" name="email" id="email" placeholder="abc@gmail.com">
            <input type="phone" name="phone" id="phone" placeholder="Enter your mobile number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your other opinion."></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->

        </form>

    </div>
    <script src="script.js"></script>
     
</body>
</html>