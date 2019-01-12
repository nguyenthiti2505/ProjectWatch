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
//current URL of the Page. cart_update.php redirects back to this URL
// $current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   $result = mysqli_query($con,"SELECT * FROM product ORDER BY id ASC");
   echo "<form method='post' enctype='multipart/form-data'>";
        // echo "<table border='1' class = 'table'>    
        // <tr>
        // <th>ID</th>
        // <th>prod_name</th>
        // <th>price</th>
        // <th>quantity</th>
        // <th>Xem</th>
        // </tr>";
        // $i = 1;
        // while($row = mysqli_fetch_array($result))
        // {
        //     echo "<tr>";
        //     echo "<td>" . $i . "</td>";
        //     echo "<td>" . $row['prod_name'] . "</td>";
        //     echo "<td>" . $row['price'] . "</td>";
        //     echo "<td>" . $row['quantity'] . "</td>";
        //     echo "<td><a href='index.php?page=products&action=add&id={$row['id']}'>Add to cart</a></td>";
        //     echo "</tr>";
        //     $i++;
        // }
        // echo "</table>";
   $i = 1;
   echo "<div style='width: 100%; float: left; '>";
   while($row = mysqli_fetch_array($result))
        {   echo "<center>";
            echo "<div style='width: 32% ; float: left; border-style: ridge;'>";
            echo "<p>" . $i . "</p>";
            echo "<p>" . $row['prod_name'] . "</p>";
            echo "<img style='width: 30%; height: 140px;' src=". $row['image'] . ">"; 
            echo "<p>" . $row['price'] . "</p>";
            echo "<p>" . $row['quantity'] . "</p>";
            echo "<p><a href='index.php?page=products&action=add&id={$row['id']}'><img class='giohang' src='images/giohang.png'></a></p>";
            
            echo "</div>";
            echo "</center>";
            $i++;
        }
        echo " </form>";
echo "</div>";


?>

   



