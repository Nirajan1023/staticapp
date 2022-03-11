<?php
$ID= filter_input(INPUT_POST,'ID');
$password= filter_input(INPUT_POST,'password');
$time=filter_input(INPUT_POST,'time');
$remarks=filter_input(INPUT_POST,'remarks');
$comment=filter_input(INPUT_POST,'comment');


$ID= $_POST['ID'];
$password= $_POST['password'];
	if($ID=="milan" && $password=="milan")
		{
				$host= "localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="yummy";
	
	$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
		die('ConnectError('.mysqli_connect_errno().')'
		.mysqli_connect_error());
	}
	
	else{
	$sql="INSERT INTO data(ID,password,time,remarks,comment)
	values('$ID','$password','$time','$remarks','$comment')";
	}
	
	if($conn->query($sql)){
	echo "Record inserted";
	}
	else
	{
		echo "Error:".$sql."<br>".$conn->error;
	}
				
			}
			
			else{
				echo "WRONG USERNAME OR PASSWORD !!YOUR ORDER ISNT TAKEN";
			}
			
	
	

?>