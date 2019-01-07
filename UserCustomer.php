<?php 
include('header.php');
include('connect.php');
session_start();
 ?>

<?php 

$result = mysqli_query($con,"SELECT * FROM users");

echo "<table border='1' class = 'table'>
<tr>
<th>ID</th>
<th>User_Name</th>
<th>Password</th>
<th>Address</th>
<th>Email</th>
<th>Xem</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td> <button type='submit' name='submit' value='Xem'>Xem</button></td>";
echo "</tr>";
}
echo "</table>";
 ?>



<?php include('footer.php') ?>
