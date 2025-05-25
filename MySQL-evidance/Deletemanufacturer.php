<?php
$deleteId=$_GET['deleteid']??null;
if($deleteId){
$db=new mysqli("localhost", "root", NULL, "company");
$myShowQuery="delete from manufacturer where id='$deleteId';";
$db->query($myShowQuery);
$db->close();
$message =  "manufacturer with id: $deleteId deleted";}
?>
<html>
<head>
    <title>Manufacturer</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:rgb(215, 217, 219);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
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
        }

        select {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        select:focus {
            border-color: #ff4d4f;
            outline: none;
        }

        input[type="submit"] {
            background-color: #ff4d4f;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #d9363e;
            transform: scale(1.03);
        }
    </style>
</head>

<body>
<div class="container">
<h2>Manufacturer Table</h2>
<h3><?= $message??""; ?></h3>
	<form action="#" method="get">
		<table>
               <tr><td>Manufacturer</td><td>:</td>
               <td>
               <?php
               $db=new mysqli("localhost", "root", NULL, "company");
               $myShowQuerry="select * from manufacturer where 1;";               
               $result = $db->query($myShowQuerry);
               echo "<select name='deleteid'>";
               while ($row=$result->fetch_assoc()){               
               	echo "<option value=" .$row['id'].">".$row['name']."</option>";}               
               echo "</select>";               
               $result->free();
               $db->close();                             
               ?>
               </td></tr>			   
			   <tr><td></td><td></td>
               <td>
               <input type="submit" name="delete"  id="btnDelete" value="delete" />
               </td></tr></table>
            </form>
               </div>
        </body>
        </html>
 

  