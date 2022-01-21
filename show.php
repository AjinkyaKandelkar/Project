<?php

	$conn= new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die("Error record!!".$conn->connect_error);
    }else{
    	$query="select * from product";
    	$result=mysqli_query($conn,"SELECT * FROM product");
    }

?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<table align="center" border="1px" style="width:300px line-height:30px">
			<tr>
				<th> Category Name</th>
				<th> Product ID </th>
				<th> Product Name </th>
				<th> Product Price </th>
			</tr>
			<?php
				while ($row=mysqli_fetch_assoc($result)) 
				{
			?>
				<tr>
					<td><?php echo $row['category_name']; ?></td>
					<td><?php echo $row['product_id']; ?></td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['product_price']; ?></td>
				</tr>		
			<?php
				}
			?>

		</table>
	</body>
	</html>