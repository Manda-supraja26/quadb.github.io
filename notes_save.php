<?php
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if(!$con){
	die("connection to this database is failed" .mysqli_connect_error());

}
$notes_desc = $_POST['notes'];
if($notes_desc!=''){
	$notes_date=date("y-m-d");
	$notes_createtime=date("y-m-d H:i:s");


$sql="INSERT INTO  `quadb`.`notes` (`notes_id`, `notes_desc`, `notes_date`, `notes_createtime`) VALUES ( '$notes_desc', '$notes_date', '$notes_createtime');";
$qry=mysqli_query($con,$sql);


}


mysqli_close($con);


?>