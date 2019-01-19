<?php  include('header.php'); 
include('connect.php');?>
<content>
  <div class="container-fluid" > 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php 
            $sql1 = "SELECT * FROM product WHERE status = 4";
            $resProd = mysqli_query($con,$sql1);
            $count = 0;
            $a = '';
            while ($rowProd = mysqli_fetch_assoc($resProd)){
              if ($count == 0) {
                $a = 'active';
              }else{
                $a = '';
              }
              echo "<div class='carousel-item $a'><img class='d-block w-100' src=".$rowProd['image']."></div>";  
              $count++; 
            } 
          ?>      
        </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>        
    </div>

    <div class ="row row1">
      <?php 
        $sql1 = "SELECT * FROM product WHERE status = 3";
        $resProd = mysqli_query($con,$sql1);
        while ($rowProd = mysqli_fetch_assoc($resProd)){
          echo "<a href = 'ChiTietYellow.html' class = 'column col-md-4 col-sm-4 col-xs-4 embed-responsive embed-responsive-16by9' id = 'zoomIn'><figure><img class='rounded embed-responsive-item'  src = ".$rowProd['image']." ></figure></a>"; 
        } 
      ?>  
    </div>

    <div>
      <br>
      <h1 ><center><strong>The Car For Your Life</strong></center></h1>
      <center><hr style="color: red;"></center>
      <div class="acr-underheading"></div>
      <h2 style="font-family: AvenirLTPro-LightOblique;"><center><q >Exhilaration Takes Many Forms</q></center></h2>
    </div><br /><br />

    <div class="row">
      <?php
        $sql1 = "SELECT * FROM product WHERE status = 2";
        $resProd = mysqli_query($con,$sql1);
        while ($rowProd = mysqli_fetch_assoc($resProd)){
          echo "<div class='item col-md-4'>";
          echo "<div class='box embed-responsive embed-responsive-16by9'><a href=''><img class='rounded embed-responsive-item' src=".$rowProd['image']." alt=''></a>
            <a href=''><div class='boxContent'>
            <p class='description'><strong>MDX</strong></p>
            <button class='btn btn-info'><a href='login.php'>Đặt hàng</a></button>
            </div></a>
            </div>";
          echo "</div>"; 
        }
      ?>  
      <button><a href="login.php" title=""></a></button>
    </div> <br>
    
    <a href="index.php"><center><div><button class="btn-info" style="width: 150px; height: 50px;">Dat Ngay</button></div></center></a><br>
    <div >
      <h2 class="h1" style="font-family: AvenirLTPro-LightOblique;"><center><q >Precision Crafted Performance is the future of this brand but it's not a destination. It's a mindset and a commitment to doing new and challenging things based on our own unique ideas for our customers.</q></center></h2>
    </div><br><br>
  </div>    
</content><br> 
<?php include('footer.php') ?>

             

