<?php

	$name = $_POST['name'];
	$Phone = $_POST['Phone'];
	$address = $_POST['address'];
	$couname = $_POST['couname'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $status = $_POST['status'];
    $payment = $_POST['payment'];

	// Database connection
	$conn = new mysqli('localhost','root','','hoteL');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(name, Phone, address, couname, checkindate,checkoutdate,status,payment) values(?, ?, ?,?, ?,?,?,?)");
	$stmt->bind_param("sissssss", $name, $Phone, $address, $couname, $checkindate,$checkoutdate,$status,$payment);
	$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}
	
?>