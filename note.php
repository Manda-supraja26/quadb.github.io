<?php
if(isset($_POST['submit'])){
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if(!$con){
	die("connection to this database is failed" .mysqli_connect_error());

}
$notes_desc = $_POST['notes'];
if($notes_desc!=''){
	
	$notes_createtime=date("y-m-d H:i:s");


$sql="INSERT INTO `quadb`.`notes1` (`notes_dis`, `notes_createtime`) VALUES ('$notes_desc', '$notes_createtime');";
if($con->query($sql)==true){
    $insert = true; 
}
else{
    echo "ERROR: $sql <br> $con->error";
    
}



}


$con->close();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dear dairy</title>
    <!-- bootstrap css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="note.css">
</head>
<body>
    <nav class="logout">
    <div class="log" style="padding:10px;background-color:green; text-align:right;">
         <a href="index.php" style="padding:10px;text-align:right;margin-rignt:0px;text-decoration:none;color:white ;background-color:green;text-transform:capitalize">logout</a>
</div>

    </nav>
    <div class="container">
        <div class="head">
            <h1 class="header">
                dear dairy
            </h1>
            
            <form action="note.php" method="post">
                <div class="form_note">
                    <textarea name="notes" id="notes_desc"placeholder="make your own note of your day!"></textarea><br>
                 <button type="submit" name="submit">submit</button>
            </div>
            </form>
            
     </div>
    </div>
    



    <!-- bootstrap script  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"> -->
<!-- // this is the code for auto save 
//     function autoSave(){
//         var notes_desc = document.getElementById('notes_desc').value;
//         if(notes_desc!="")
//         {
//             $.ajax({
//             url:'note.php',
//             method:"post",
//             data:{notes_desc : notes_desc},
//             success:function(response)
//             {
                
//             }
//         });
//     }

// }
// setInterval(function(){
//     autoSave();
// },10000); -->

</script>
</body>
</html>