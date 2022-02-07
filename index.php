<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fb038c2910.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    <div class="banner">
        <img src="banner.png" style="width: 1920; height: 786;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 c">
                    <div class="text">
                        <h1>hair to <br> waist <br>xtensions</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, pariatur ipsum aut sed neque expedita minima praesentium.</p>
                        <button class="button">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="social">

                <p>Email : hairtowaistxtensions@gmail.com &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    Phone : 8504595082 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    Address : 6489 Broadtree Court</p>

            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="welcome ">
                <h2>Welcome To</h2>
                <h1>Extensions</h1>
                <div class="row ">
                    <div class="col-md-5 c ">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <br><br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi arch
                        </p>
                    </div>
                    <button class="readmore ">Read More</button>
                </div>
                <div class="col-md-5 c">
                    <div class="wel_pic ">

                        <img src="welcome.png ">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="our_product">
                <div class="row ">
                    <div class="col-md-5 c ">
                        <h1>Our Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row ">


                       <?php
                            include "connection.php";
                            $count = 0;
                            $r = mysqli_query($conn, "SELECT * FROM table_products ORDER BY product_id DESC");

                            while($row=mysqli_fetch_assoc($r)){
                                $count++;
                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_price = $row['product_price'];
                            $product_label_price = $row['product_label_price'];
                            $product_image = $row['product_image'];
                                    
                            ?>




                        <div class="col-md-4 c ">
                            <img class="card2" src="<?php echo 'images/'.$product_image?>"  style="height: 380px; width: 370px;">
                            <h2><a href="Product-Details.php?id=<?php echo  $product_id?>" ><?php echo  $product_name?></a></h2>
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">
                                <p class="cancel">Rs.<?php echo  $product_price?></p>
                            </div>
                            <div class="tag">
                                <p>Rs.<?php echo  $product_label_price?></p>
                            </div>
                        </div>
                        
                        <?php
                        if($count == 3){
                            break;
                        }
                                                }
                               

                                ?> 



                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner2">
        <img src="banner2.png" style="width: 1920; height: 786;">
    </div>
    <div class="container ">
        <div class="row ">
            <div class="banner-caption">
                <h4>BEST OF</h4>
                <h1>HAIR </h1>
                <h5>50% OFF</h5>
                <div class="row ">
                    <div class="col-md-5 c ">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit.
                        </p>

                    </div>
                    <button class="learnmore ">Learn More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="our_product">
                <div class="row ">
                    <div class="col-md-5 c ">
                        <h1>BEST SELLER</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row ">
                        <div class="col-md-4 c ">
                            <img class="card1" src="card1.png" style="height: 380px; width: 370px;">
                            <h2>Your Heading Here!</h2>
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">
                                <p class="cancel">$22.00</p>
                            </div>
                            <div class="tag">
                                <p>$20.00</p>
                            </div>
                        </div>
                        <div class="col-md-4 c ">
                            <img class="card2" src="card1.png" style="height: 380px; width: 370px;">
                            <h2>Your Heading Here!</h2>
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">
                                <p class="cancel">$22.00</p>
                            </div>
                            <div class="tag">
                                <p>$20.00</p>
                            </div>
                        </div>
                        <div class="col-md-4 c ">
                            <img class="card3" src="card1.png" style="height: 380px; width: 370px;">
                            <h2>Your Heading Here!</h2>
                            <div class="star-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">
                                <p class="cancel">$22.00</p>
                            </div>
                            <div class="tag">
                                <p>$20.00</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="our_client">
                <div class="row ">
                    <div class="col-md-12 c ">
                        <h1>OUR CLIENT REVIEW</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="review_card">
                    <div class="row ">
                        <div class="col-md-4 c ">
                            <div class="rcard1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <img class="user" src="rcard1.png">
                                <h4>Jhon Smith</h4>
                                <h5>Gamer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 c ">
                            <div class="rcard1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                                <img class="user" src="rcard1.png">
                                <h4>Jhon Smith</h4>
                                <h5>Gamer</h5>
                            </div>
                        </div>
                        <div class="col-md-4 c ">
                            <div class="rcard1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                                <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                                <img class="user" src="rcard1.png">
                                <h4>Jhon Smith</h4>
                                <h5>Gamer</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container ">
        <div class="searchbar">
            <div class="row ">
                <div class="col-md-6 c ">
                    <h2>Subscribe To Our <br> Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
                <div class="container ">
                    <div class="row ">
                        <div class="email">
                            <div class="row">
                                <div class="col-md-6 c ">
                                    <p>Email Address</p>

                                    <div class="shop">
                                        <div class="row">
                                            <div class="col-md-2 c ">
                                                <a href="#">Shop&nbspNow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<footer>
    <!-- <div class="container ">
        <div class="footer">
            <div class="details">
                <div class="row">
                    <div class="col-md-12 c">
                        <div class="dcard">
                            <div class="row">
                                <div class="col-md-3 c">
                                    <h3>Company</h3>
                                    <p> > Lorem ipsm dolor</p>
                                    <hr style="width: 165px; ">
                                    <p> > Lorem ipsm dolor</p>
                                    <p> > Lorem ipsm dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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

</html>