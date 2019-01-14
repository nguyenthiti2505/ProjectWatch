<?php 
session_start();
include('header.php');
include('connect.php');
//include('cart.php');
//include('index.php');
  
    if(isset($_GET['action']) && $_GET['action']=="add"){   
        $id=intval($_GET['id']);       
        if(isset($_SESSION['cart'][$id])){ 
            $_SESSION['cart'][$id]['quantity']++; 
        }else{ 
               $result1= mysqli_query($con,"SELECT * FROM product 
                WHERE id={$id}");
            if(mysqli_num_rows($result1)!=0){ 
                $row_s=mysqli_fetch_array($result1); 
                $_SESSION['cart'][$row_s['id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
            }else{      
                $message="This product id it's invalid!";      
            } 
        }        
    } 
?>
<?php
   $result = mysqli_query($con,"SELECT * FROM product ORDER BY id ASC");
   echo "<form method='post' enctype='multipart/form-data'>";
   $i = 1;
   echo "<div style='width: 100%; float: left; '>";
   while($row = mysqli_fetch_array($result))
        {   echo "<center>";
            echo "<div style='width: 32% ; float: left; border-style: ridge;'>";
            echo "<p> Category : " . $i . "</p>";
            echo "<strong><p> Name : " . $row['prod_name'] . "</p></strong>";
            echo "<img style='width: 30%; height: 140px;' src=". $row['image'] . ">"; 
            echo "<p> Price : " . $row['price'] . "</p>";
            echo "<p> quantity :" . $row['quantity'] . "</p>";
            echo "<p><a href='' src='images/giohang.png'></a></p>";
            echo "<tr><td><a href='editsanphan.php'><button class='btn-info'> EDIT </button></a></td>
                       <td><a href='insertsanphan.php'><button class='btn-info'> INSERT</button></a></td>
            </tr>";
            
            echo "</div>";
            echo "</center>";
            $i++;
        }
        echo " </form>";
echo "</div>";
?>

   
