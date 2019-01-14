<?php include('header.php'); 
       require ('connect.php')
?>
	<!-- bai cua ti -->
  <content>
  <div class="container-fluid" >  
        <div id="SportCar" class="carousel slide " data-ride="carousel">  
            <ol class="carousel-indicators">  
              <li data-target="#SportCar" data-slide-to="0" class="active"></li>  
              <li data-target="#SportCar" data-slide-to="1"></li>  
              <li data-target="#SportCar" data-slide-to="2"></li>  
                
            </ol> 
             

             <div class="carousel-inner " data-interval="100">  
                  <?php
                  $sql1 = "SELECT * FROM slide";
                  $resProd = mysqli_query($con,$sql1);
                  while ($rowProd = mysqli_fetch_assoc($resProd))
                  {
                    echo "<div class='carousel-item active'>
                    <div class='carousel-item active'>  
                      <img src=".$rowProd['image']." style='width: 100%' alt='Slider-1'/>
                      <div class='centered'></div>
                    </div> 
                  </div>
                  ";   
                  } 
                ?>
              </div> 
                 
                  <a class="carousel-control-prev" href="#SportCar" role="button" data-slide="prev">  
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>  
                      <span class="sr-only" style="color: red;">Previous</span>  
                  </a>  
                  <a class="carousel-control-next" href="#SportCar" role="button" data-slide="next">  
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>  
                      <span class="sr-only" style="color: red;">Next</span>  
                  </a>  
        </div>  
              <div class ="row row1">
                <a href = "ChiTietYellow.html" class = "column col-md-4 col-sm-4 col-xs-4 embed-responsive embed-responsive-16by9" id = "zoomIn"><figure><img class="rounded embed-responsive-item"  src = "images/moinhat1.png" ></figure></a>
                <a href = "ChiTietYellow.html" class = "column col-md-4 col-sm-4 col-xs-4 embed-responsive embed-responsive-16by9" id="zoomOut"><figure><img class="rounded embed-responsive-item"src = "images/moinhat2.png"></figure></a>
                <a href = "ChiTietYellow.html" class = "column col-md-4 col-sm-4 col-xs-4 embed-responsive embed-responsive-16by9" id = "zoomOut"><figure><img class="rounded embed-responsive-item" src = "images/moinhat3.png"></figure></a>  
              </div>
      <!-- TU DAY -->
            <div>
              <br>
              <h1 ><center><strong>The Car For Your Life</strong></center></h1>
              <center><hr style="color: red;"></center>
              <div class="acr-underheading"></div>
            <h2 style="font-family: AvenirLTPro-LightOblique;"><center><q >Exhilaration Takes Many Forms</q></center></h2>
            </div><br /><br />
          <div class="row">
          <div class="item col-md-4">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/bamgio1.jpg" alt=""></a>
            
            <a href="#"><div class="boxContent">
             <p class="description"><strong>ILX</strong></p>
            <button class="btn btn-info">Đặt hàng</button> 
            </div></a>
           </div>
          </div>

           <div class="item col-md-4 ">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/baothuc2.jpg" alt=""></a>
            
            <a href="#"><div class="boxContent">
             <p class="description"><strong>ILX</strong></p>
             <button class="btn btn-info">Đặt hàng</button>
            </div></a>
           </div>
          </div> 

          <div class="item col-md-4 ">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/conu1.jpg" alt=""></a>
           
            <a href="#"><div class="boxContent">
             <p class="description"><strong>TLX</strong></p>
            <button class="btn btn-info">Đặt hàng</button>
            </div></a>
           </div>
          </div> 

           <div class="item col-md-4 ">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/dientu1.jpg" alt=""></a>
         
            <a href="#"><div class="boxContent">
             <p class="description"><strong>RLX</strong></p>
             <button class="btn btn-info">Đặt hàng</button> 
            </div></a>
           </div>
          </div>

          <div class="item col-md-4">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/danang.jpg" alt=""></a>
           
            <a href="#"><div class="boxContent">
             <p class="description"><strong>RDX</strong></p>
             <button class="btn btn-info">Đặt hàng</button> 
            </div></a>
           </div>
          </div>

          <div class="item col-md-4 ">
           <div class="box embed-responsive embed-responsive-16by9"><a href="#"><img class="rounded embed-responsive-item" src="images/govuong1.jpg" alt=""></a>
            
            <a href="#"><div class="boxContent">
             <p class="description"><strong>MDX</strong></p>
             <button class="btn btn-info">Đặt hàng</button>
            </div></a>
           </div>
          </div>     
              </div>
           <br>
           <a href="index.php"><center><div><button class="btn-info" style="width: 150px; height: 50px;">Dat Ngay</button></div></center></a> 

              <br>
              <div >
                <h2 class="h1" style="font-family: AvenirLTPro-LightOblique;"><center><q >Precision Crafted Performance is the future of this brand but it's not a destination. It's a mindset and a commitment to doing new and challenging things based on our own unique ideas for our customers.</q></center></h2>
              </div>
              <br>
              <br>
  </div>    
</div>
</content>
<br> -->
<?php include('footer.php') ?>

             

