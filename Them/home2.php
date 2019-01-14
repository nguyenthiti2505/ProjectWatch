<?php include('header.php'); 
       require ('connect.php')
?>
	<!-- bai cua ti -->
  <content>
  <div class="container-fluid" >  
        <div id="SportCar" class="carousel slide" data-ride="carousel">  
            <ol class="carousel-indicators">  
              <li data-target="#SportCar" data-slide-to="0" class="active"></li>  
              <li data-target="#SportCar" data-slide-to="1"></li>  
              <li data-target="#SportCar" data-slide-to="2"></li>  
              <li data-target="#SportCar" data-slide-to="3"></li>  
              <li data-target="#SportCar" data-slide-to="4"></li>  
            </ol> 
              <div class="carousel-inner " data-interval="100">  
                  <div class="carousel-item active  ">  
                      <img class="" src="images/slide1.gif" style="width: 100%" alt="Slider-1"  />
                      <div class="centered"></div>
                  </div>  
                  <div class="carousel-item">  
                      <img class="" src="images/slide2.gif" style="width: 100%" alt="Slider-2" />
                  </div>  
                  <div class="carousel-item">  
                      <img class=""src="images/slide3.gif" style="width: 100%" alt="Slider-3" />  
                  </div>  
                  <div class="carousel-item">  
                      <img class=""src="images/slide4.gif" style="width: 100%" alt="Slider-4" />  
                       <div class="centered"></div>
                  </div>  
                  <div class="carousel-item">  
                      <img class=""src="images/Slide1.gif"  style="width: 100%" alt="Slider-5" />  
                       <div class="centered"></div>
                  </div>  
              </div>   
                <!-- <section id="home" class="slider" data-stellar-background-ratio="0.5" >
                  <div class="row">
                      <div class="owl-carousel owl-theme">
                <?php
                $sql1 = "SELECT * FROM slide";
                $resProd = mysqli_query($con,$sql1);
                while ($rowProd = mysqli_fetch_assoc($resProd))
                {
                   ?>
               <div>
                   <img  src="<?php echo $rowProd['image']; ?>">
               </div>
                  <?php } ?>
              </div>
              </div>
              </section> -->
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
              <div >
                <h2 class="h1" style="font-family: AvenirLTPro-LightOblique;"><center><q >Precision Crafted Performance is the future of this brand but it's not a destination. It's a mindset and a commitment to doing new and challenging things based on our own unique ideas for our customers.</q></center></h2>
              </div>
              <br>
              <br>
    <div id="wrapper">
          <div class="container">
            <div class="box-index">
              <center><h1 class="text-danger font-italic">Exhilaration Takes Many Forms</h1></center>
              <br>
              <div class="row conProduct">
                <div class="col-md-9">
                  <div class="row">
                    <div  class="col-md-6 productImage">
                      <a href="#"><img class="img-thumbnail" src="images/bamgio2.jpg"></a>
                        <a href="#"><h3>Mercedes-AMG GT C/GT C</h3></a>
                          <div class="row">
                            <div class="col-xs-5 productPrice"><br ><p> &#9733  &#9733  &#9733  &#9733  &#9733</p></div>
                            <br />
                            <div class="col-xs-5 productPriceps"> Price Starting at  : <br> <span style="font-size: 30px"><strong>145,995$</strong></span>
                            </div>   
                          </div>
                      <input type="checkbox" name="compare"><a href="">  Compare</a>
                        <p style="font-family: FreightTextW01,Georgia">Sporting an adaptive adjustable suspension, active aerodynamics, and trick rear-axle steering, the track-focused variants of the GT are...</p>
                        <a href="ChiTietYellow.html"><p underline>View Model Details</p></a>
                    </div>
                    <div class="col-md-6 productImage">
                      <a href="#"><img class="img-thumbnail" src="images/baothuc2.jpg"></a>
                        <a href="#"><h3>Lamborghini HuraCan</h3></a>
                          <div class="row">
                            <div class="col-xs-5 productPrice"> <p> &#9733  &#9733  &#9733  &#9733  &#9733</p></div><br /><br />
                            <div class="col-xs-5 productPriceps"> Price Starting at  : <br> <span style="font-size: 30px"><strong>45,95$</strong></span>
                            </div>   
                          </div>
                    <input type="checkbox" name="compare"><a href="">  Compare</a>
                      <p style="font-family: FreightTextW01,Georgia">Forget the Chevrolet bow tie—the Corvette's performance puts it on a level with some of the best sports cars in the world.</p>
                      <a href="ChiTietYellow.html"><p underline>View Model Details</p></a>
                    </div >
                  </div>
                <div class="row">
                  <div  class="col-md-6 productImage">
                    <a href="#"><img class="img-thumbnail" src="images/govuong2.jpg"></a>
                      <a href="#"><h3>Roadster /GRT </h3></a>
                        <div class="row">
                          <div class="col-xs-5 productPrice"> <p> &#9733  &#9733  &#9733  &#9733  &#9733</p></div>
                          <div class="col-xs-5 productPriceps"> Price Starting at  : <br> <span style="font-size: 30px"><strong>145,995$</strong></span></div>  
                        </div>
                  <input type="checkbox" name="compare"><a href="">  Compare</a>
                    <p style="font-family: FreightTextW01,Georgia">Sporting an adaptive adjustable suspension, active aerodynamics, and trick rear-axle steering, the track-focused variants of the GT are...</p>
                    <a href="ChiTietYellow.html"><p underline>View Model Details</p></a>
                  </div>
                <div class="col-md-6 productImage">
                  <a href="#"><img class="img-thumbnail" src="images/kythuat2.jpg"></a>
                    <a href="#"><h3>Lamborghini HuraCan</h3></a>
                  <div class="row">
                    <div class="col-xs-5 productPrice"> <p> &#9733  &#9733  &#9733  &#9733  &#9733</p></div>
                      <div class="col-xs-5 productPriceps"> Price Starting at  : <br> <span style="font-size: 30px"><strong>45,95$</strong></span>
                      </div>  
                  </div>
                  <input type="checkbox" name="compare"><a href="">  Compare</a>
                   <p style="font-family: FreightTextW01,Georgia">Forget the Chevrolet bow tie—the Corvette's performance puts it on a level with some of the best sports cars in the world.</p>
                  <a href="ChiTietYellow.html"><p underline>View Model Details</p></a>
                </div >
                </div>
                </div>
                <div class="col-md-3 Advent">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M-P4QBt-FWw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                  <a href="#"><img class="rounded" src="images/xe.gif" style="width: 100%; height: 800px;"></a>
                </div>
              </div>
           </div>             
    </div>
  </div>     
</div>
</content>
<br>
<?php include('footer.php') ?>