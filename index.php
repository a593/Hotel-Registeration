<!DOCTYPE html>
<html>
<head>
	<title>Fitness</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="connect.php" method="post">
<div id="div1">
		<table >
		<caption id="caption1"> Hotel Registration form </caption>
		<tr>
		<td><label for="name">Name: </label></td>
		<td><input type="text" id="name" name="name" ></td>
		
	</tr>
	     <tr>
		<td><label for="password">Phone No.: </label></td>
		<td><input type="number" id="password" name="Phone"></td>
		
	</tr>
	    <tr>
		<td><label for="">Address: </label></td>
		<td><textarea rows="5" cols="27" name="address"></textarea></td>
	</tr>
	<tr>
		<td><label for="country" >Country : </label></td>
		<td><input type="text" name="couname"></td>
	</tr>
	<tr>
		<td><label >Check-In-Date :</label></td>
        <td><input type="date" name="checkindate"></td>
    </tr> 
    <tr>
		<td><label >Check-Out-Date :</label></td>
        <td><input type="date" name="checkoutdate"></td>
    </tr>
    <tr>
        <td><label>Payment-Status</label></td>
            <td>
                <input type="radio" name="status" value="Yes" >
                <label for="Yes">Yes</label>    
                <input type="radio" name="status" value="No" >
                <label >No</label>  
</td> 
</tr> 
<tr>
    <td><label>Payment Mode</label></td>
    <td>
        <input type="radio" name="payment" value="Cash"> 
        <label >Cash</label>
        <input type="radio" name="payment" value="Card">
        <label >Card</label>
        <input type="radio" name="payment" value="paypal">
        <label >Paypal</label>
        <input type="radio" name="payment" value="Cheque">
        <label >Cheque</label>
</td>
</tr>

		
	
		
	</table>
	<button id="btn1">submit</button>
</div>
</form>
</body>
</html>