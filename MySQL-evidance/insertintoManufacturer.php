<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>stored procedure</title>
	<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background:rgb(232, 233, 233);
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin: 50px auto;
        background-color:rgb(237, 242, 243);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 12px 10px;
        font-size: 16px;
        color: #333;
    }

    td:first-child {
        width: 30%;
        font-weight: 500;
        text-transform: capitalize;
    }

    input[type="text"] {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #007BFF;
        outline: none;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
        transform: scale(1.02);
    }
</style>

</head>
<body>
<?php
	if(isset($_GET["name"])){
	$db = new mysqli("localhost", "root", NULL, "company");
	$name=$_GET["name"];
	$address=$_GET["address"];
	$tel=$_GET["contact"];
	$queryString="call manufact('$name','$address','$tel');";	
	$db->query($queryString);
	echo "<h3>Data Added!!</h3>";	
	$db->close();
	}
?>
<div class="container">
 <form name="a"  action="#" method="get">    
<table style="width: 100%; border: 1px solid red" >
<tr><td>name</td><td>:</td><td><input type="text" name="name" id="name"/></td></tr>
<tr><td>address</td><td>:</td><td><input type="text" name="address" id="address"/></td></tr>
<tr><td>contact_no</td><td>:</td><td><input type="text" name="contact" id="contact"/></td></tr>
<tr><td align="center" colspan="3">
    <input type="submit" name="add" value="Add">
   </td></tr>
</table>
</form>
</div>
</body>
</html>

