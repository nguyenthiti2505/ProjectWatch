<?php 
include('header.php');
require('connect.php');
//include("auth.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="index">
	<div class="menu">
		<?php include 'menudoc.php' ?>	
	</div>
	<div class="sanpham">
		<div>
			<tr>
				<td>
					<div class="col-md-8">
						<center><h2>Quản lý Sản Phẩm</h2></center>
					</div>	
				</td>
				<td>
					<div class="col-md-4 search">
						<form class="example" method="post" action="">
				  			<input type="text" placeholder="Search.." name="search">
				  			<button type="submit" value="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</td>
			</tr>
		</div>
		<div class="form">
			<table class="table table-striped">
				<thead>
					<tr>
						<th><strong>S.No</strong></th>
						<th><strong>Prod_name</strong></th>
						<th><strong>Category</strong></th>
						<th><strong>Price</strong></th>
						<th><strong>Quantity</strong></th>
						<th><strong>Status</strong></th>
						<th><strong>Date</strong></th>
						<th><strong>Images</strong></th>
						<th><strong>Edit</strong></th>
						<th><strong>Delete</strong></th>
						<th><strong>Insert</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=1;
						$sel_query="Select * from product ORDER BY id desc;";
						$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr><td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["prod_name"]; ?></td>
								<td align="center"><?php echo $row["category_id"]; ?></td>
								<td align="center"><?php echo $row["price"]; ?></td>
								<td align="center"><?php echo $row["quantity"]; ?></td>
								<td align="center"><?php echo $row["status"]; ?></td>
								<td align="center"><?php echo $row["imported_date"]; ?></td>
								<td align="center"><?php echo $row["image"]; ?></td>
								<td align="center">
									<a href="editsanpham.php?id=<?php echo $row["id"]; ?>">Edit</a>
								</td>
								<td align="center">
									<a href="deletesanpham.php?id=<?php echo $row["id"]; ?>">Delete</a>
								</td>
								<td align="center">
									<a href="insertsanpham.php?id=<?php echo $row["id"]; ?>">Insert</a>
								</td>
							</tr>
					<?php $count++; } ?>
			</tbody>
		</table>
	</div>	
</div>
				
</div>
	
	
