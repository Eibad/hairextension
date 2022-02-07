<?php
        include "connection.php";
        $product_id = $_GET['id'];
        $query = "SELECT * FROM table_products WHERE product_id = '".$product_id."'";
        $r = mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($r);
                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_price = $row['product_price'];
                            $product_label_price = $row['product_label_price'];
                            $product_description = $row['product_description'];
                            $product_image = $row['product_image'];
                                    
                            ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product Details</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/product-detailstyle.css" />
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
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

    <section class="details">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="proImg">
              <img src="<?php echo 'images/'.$product_image?>" style='height: 380px; width: 370px' class="img-responsive" alt="img" />
            </div>
          </div>
          <div class="col-md-7">
            <h2><?php echo  $product_name?></h2>
            <h3>Passage</h3>
            <h3></h3>
            <p><?php echo  $product_description?>
            </p>
            <div class="col-md-3">
              <div class="number">
                <span class="minus">-</span>
                <input type="text" value="1" />
                <span class="plus">+</span>
              </div>
            </div>
            <div class="col-md-3">
              <button class="buyButton" type="button">Buy Now</button>
            </div>
          </div>
          <div class="col-md-2">
            <h4 class="ava">Availability:</h4>
          </div>
          <div class="col-md-2">
            <p class="stocking">In Stock</p>
          </div>
          <!--For widgets-->
          <div class="col-md-6">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
                illum explicabo sint ipsa veritatis, consequuntur sapiente, fugit
                officiis aliquam obcaecati ducimus sit natus distinctio praesentium
                repellendus voluptatibus nobis velit. Vel. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Debitis quae eos consequuntur ex
                itaque accusantium omnis earum magnam doloribus obcaecati
                reprehenderit, quisquam possimus praesentium eligendi. Excepturi eos
                aperiam sed at.
                
              </p>
            </div>
            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
                illum explicabo sint ipsa veritatis, consequuntur sapiente, fugit
                officiis aliquam obcaecati ducimus sit natus distinctio praesentium
                repellendus voluptatibus nobis velit. Vel. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Debitis quae eos consequuntur ex
                itaque accusantium omnis earum magnam doloribus obcaecati
                reprehenderit, quisquam possimus praesentium eligendi. Excepturi eos
                aperiam sed at.
                
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="det_para">
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
            illum explicabo sint ipsa veritatis, consequuntur sapiente, fugit
            officiis aliquam obcaecati ducimus sit natus distinctio praesentium
            repellendus voluptatibus nobis velit. Vel. Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Debitis quae eos consequuntur ex
            itaque accusantium omnis earum magnam doloribus obcaecati
            reprehenderit, quisquam possimus praesentium eligendi. Excepturi eos
            aperiam sed at.
            <br />
            <br />
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque
            laboriosam ratione deserunt animi nostrum sunt, voluptatum provident
            voluptatem quaerat nulla libero necessitatibus rerum dicta, eveniet
            aliquid voluptatibus suscipit tenetur perferendis.
          </p>
        </div> -->
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
    <script>
      $(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
    </script>

  </body>
</html>
