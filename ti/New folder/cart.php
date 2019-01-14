<?php 
    include('connect.php');
    session_start();
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
<h1>View cart</h1> 
<a href="index.php?page=product">Go back to products page</a> 
<form method="post" action="index.php?page=cart">
<!-- <?php //print_r($_SESSION['cart']); ?>  -->
      
    <table class="table"> 
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th>
            <th>Images</th> 
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
            <td><?php echo "<img style='width: 90%; height: 140px;' src=". $row['image'] . ">"; ?></td>
        </tr> 
            <!--   -->
        <?php
         }
        ?>   
        <?php echo "</br>"; ?>
        <tr> 
            <td colspan="4">Total Price: <?php echo $totalprice ?></td> 
        </tr> 
         <?php
        }
        ?> 
    </table> 
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
</form> 
<br /> 
<p>To remove an item, set it's quantity to 0. </p>