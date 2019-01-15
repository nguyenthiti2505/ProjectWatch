<?php session_start(); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<?php 
    include('connect.php');
    
     ?>
   <!--  <?php 
// if(isset($_POST['submit'])){ 
//         foreach($_POST['quantity'] as $key => $val) { 
//             if($val==0) { 
//                 unset($_SESSION['cart'][$key]);
//                 header('Location: product.php'); 
//             }else{ 
//                 $_SESSION['cart'][$key]['quantity']=$val; 
//                 header('Location: product.php');
//             } 
//         } 
//     }
     ?> -->


<center><h1>View cart</h1></center> 
<!-- <a href="index.php?page=product">Go back to products page</a>  -->
<form method="post" action="index.php?page=cart">
<!-- <?php //print_r($_SESSION['cart']); ?>  -->
      
    <center><table class="table table table-striped" style="width: 80%;border: 0.5px solid black"> 
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th>
            <th>Images</th>
            <th>Delete Product</th>
        </tr> 
        
        <?php 
        if(isset($_POST['submit'])){ 
            $sql="SELECT * FROM product WHERE id IN ("; 
          
            foreach($_SESSION['cart'] as $id => $value) { 
                $sql.=$id.","; 
            } 
            $sql=substr($sql, 0, -1).") ORDER BY prod_name ASC"; 
            $query=mysqli_query($con,$sql); 
            $totalprice=0;
            while($row=mysqli_fetch_array($query)){        
            $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price']; 
            $totalprice+=$subtotal;  
        ?>
        <tr>
            <td><?php echo $row['prod_name'] ?></td> 
            <td><input type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></td> 
            <td><?php echo $row['price'] ?>$</td> 
            <td><?php echo "<img style='width: 50%; height: 140px;' src=". $row['image'] . ">"; ?></td>
            <?php echo "<td><a href='deletecart.php'>Delete</a></td>"; ?> 
        </tr> 
            
        <?php
         }
        ?>   
        <?php echo "</br>"; ?>
        <tr> 
            <td colspan="5">Total Price: <?php echo $totalprice ?></td> 
        </tr> 
         <?php
        }

        ?> 
    </table> 
</center>
    <br /> 
    <center><button class="btn-info" type="submit" name="submit">Update Cart</button></center>
    <center><button class="btn-info" type="submit" name="pay">Pay</button></center> 
</form> 
<br /> 
 <?php 
    if(isset($_POST['pay'])){ 
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            //print_r($_SESSION['user']);
        $query = " INSERT INTO orders (user_name)
        VALUES('$user')";
        mysqli_query($con,$query);
            if (mysqli_multi_query($con,$query)){
                echo "Register susseccful";
            }else {
                            
            }
        }
        session_destroy();
    }
?>
