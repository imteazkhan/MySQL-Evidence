<?php
$db=new mysqli("localhost", "root", NULL, "company");
$createView= "CREATE OR REPLACE VIEW products_view AS
SELECT id, name,price, manufacturer_id FROM product WHERE price>5000";
if ($db->query($createView)){
	echo "<h3>View created successfully</h3>";	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products View</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f0f2f5;
			margin: 0;
			padding: 0;
		}

		.container {
			width: 80%;
			margin: 40px auto;
			background: #ffffff;
			padding: 30px;
			border-radius: 12px;
			box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			color: #333;
			margin-bottom: 30px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			font-size: 16px;
		}

		th, td {
			padding: 12px 15px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #007BFF;
			color: white;
			text-transform: uppercase;
			letter-spacing: 0.5px;
		}

		tr:hover {
			background-color: #f1f1f1;
		}

		.success-msg {
			background-color: #d4edda;
			color: #155724;
			padding: 10px 15px;
			border-radius: 8px;
			margin-bottom: 20px;
			border: 1px solid #c3e6cb;
		}
	</style>
</head>

<body>
<div class="container">
	<h1>Products View</h1>
	<?php
$q = "select * from products_view where 1";
$r = $db->query($q);
while ($row = $r->fetch_assoc()){
	echo "ID: " . $row['id']. ", Name: " . $row['name']. ",Price: " . $row['price']. ", Manufactuter: " . $row['manufacturer_id'] . "<br>";
}
?>
</div>
</body>
</html>

