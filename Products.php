<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Products</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/productstyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
    />
  </head>
  <body>
    <header>
      <div class="container">
          <div class="row">
              <div class="col-md-3 c">
                  <div class="logo">
                      <a href="#">hair to <br> waist xtensions</a>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="navigation">
                      <ul>
                          <li>
                              <a href="index.php">Home</a>
                          </li>
                          <li>
                              <a href="about_us.html">About</a>
                          </li>
                          <li>
                              <a href="contact.html">Contact</a>
                          </li>
                          <li>
                              <a href="products.php">Products</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="login-signup">
                      <ul>
                          <li><i class="fas fa-shopping-cart"></i></li>
                          <li><a href="#">Login / Sign Up</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <div class="main">
    <img src="banner2.png">
    <h1>Products</h1>
</div>
    <div class="container">
    <section class="rowSet">

        <div class="row">
        <?php
        include "connection.php";
        $r = mysqli_query($conn, "SELECT * FROM table_products");

                            while($row=mysqli_fetch_assoc($r)){
                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_price = $row['product_price'];
                            $product_label_price = $row['product_label_price'];
                            $product_image = $row['product_image'];
                                    
                            ?>
          <div class="col-sm-4 col-xs-3">
            <div class="best_sellerbox">
              <div class="bestsellimage">
                <img src="<?php echo 'images/'.$product_image?>" style='height: 369px; width: 360px' />
              </div>
              <div class="card_title">
                <h5><a href="Product-Details.php?id=<?php echo  $product_id?>" ><?php echo  $product_name?></a></h5>
              </div>
              <!-- <div class="best"> -->
              <h4>Rs.<?php echo  $product_price?> / <del>Rs.<?php echo  $product_label_price?></del></h4>
              <!-- </div> -->
              <div class="shop_now">
                <a href="Product-Details.html" class="shopnow_button_border">Shop Now</a>
              </div>
            </div>
          </div>
          <?php
                                }
                               

                                ?>   
   

          
         
        </div>
      
    </section>

   

    <div class="container ">
      <div class="row ">
          <div class="footer">

              <div class="detail_card">
                  <div class="row ">
                      <div class="col-md-3 c ">
                          <div class="dcard1">
                              <h4>Company</h4>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>

                              <p> >&nbsp Lorem ipsum dolor</p>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>
                              <p> > &nbspLorem ipsum dolor</p>
                          </div>
                      </div>
                      <div class="col-md-3 c ">
                          <div class="dcard1">
                              <h4>My Account</h4>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>

                              <p> >&nbsp Lorem ipsum dolor</p>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>
                              <p> >&nbsp Lorem ipsum dolor</p>
                          </div>
                      </div>
                      <div class="col-md-3 c ">
                          <div class="dcard1">
                              <h4>Help Center</h4>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>

                              <p> >&nbsp Lorem ipsum dolor</p>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>
                              <p> > &nbspLorem ipsum dolor</p>
                          </div>
                      </div>
                      <div class="col-md-3 c ">
                          <div class="dcard1">
                              <h4>Legal INFO</h4>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>

                              <p> >&nbsp Lorem ipsum dolor</p>
                              <p> >&nbsp Lorem ipsum dolor</p>
                              <hr>
                              <p> >&nbsp Lorem ipsum dolor</p>
                          </div>
                      </div>
                  </div>
              </div>
              <hr class="bar">
              <div class="mini_foot">
                  <div class="row">
                      <div class="col-md-4 c">
                          <p>Copyright&nbsp2021@&nbspAll&nbspRight&nbspResrved</p>
                      </div>
                      <div class="col-md-3 c">
                          <div class="payment">
                              <img src="payment.png">
                          </div>
                      </div>

                      <div class="col-md-1 c">
                          <div class="icon">
                              <img src="LI.png" style="margin-left: 17px; margin-top: 17px">
                          </div>
                      </div>
                      <div class="col-md-1 c">
                          <div class="icon">
                              <img src="Tweet.png" style="margin-left: 17px; margin-top: 17px">
                          </div>
                      </div>
                      <div class="col-md-1 c">
                          <div class="icon">
                              <img src="facee.png" style="margin-left: 17px; margin-top: 17px">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
