<!-- for submission it directs to autosave page -->
<?php
if(isset($_POST["submit"])){
    header('location:note.php');
}

?>
<!-- for login database  -->

<?php
if(isset($_POST['mail'])){
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database is failed" .mysqli_connect_error());

    }
    // echo "connected database";
    $mail= $_POST['mail'];
    $password =$_POST['password'];
    
    $sql="INSERT INTO `quadb`.`login2` (`mail`, `password`) VALUES ('$mail', '$password');";
    
    if($con->query($sql)==true){
        $insert = true; 
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        
    }
    $con->close();
}
?>
<!-- for form table  -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuadB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
</head>
<body>
    <div class="head">
        <p class="main">secret diary</p>
        <p class="des">stores your thoughts permnetly and securley</p>
        <p class="mark">intrested? signup</p>
    </div> 

    
   
    <div class="form">
        <form  action="index.php" method="POST">
            <input type="email" name="mail" id="mail" placeholder="username">
            <br>
            <input type="password"name="password" id="password" placeholder="password"><br>
           
            <button class="btn" name="submit" type="submit">SIGNUP</button>
        </form>
</div>
<script src="index.js">
    
</script>
    
</body>
</html> 


