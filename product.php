<?php
session_start();
?>
<style>
    h4 
    {
        text-align: center;
        color : white;
        font-size: 40px;
    }
</style>
<?php
 if(!isset($_SESSION['uname']))
 {
     echo "you are logged out login again";
     header('location: userlogin.php');
 }
 include "dbconn.php"; // Using database connection file here


$uid=$_GET['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('5zdrmrccgemu');
</script>
<!-- End of Async Drift Code -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!-- Fa Fa icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/39380151d6.js" crossorigin="anonymous"></script>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/cart.css" />
    <title>OMSS</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>OMSS</h1>
            </div>
            <?php
                    if(isset($_SESSION['uname']))
                    {
                      echo $_SESSION['status'];
                      echo $_SESSION['uname'];
                      
                    }
                ?>
            <div class="menu">
                <div class="top-nav">
                    <div class="logo">
        
                        <h1>OMSS</h1>
                    </div>
                    <div class="close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="product.php?uid=<?php echo $uid;?>" class="nav-link">Home</a>
                    </li>
                    <li>
                        <form action="" method="GET" >
                            <body>
                            <div class="search-container">
                            <input type="text" name="search" placeholder="Search..." class="search-input" pattern="[a-zA-Z0-9\s]+">
                            <input type="hidden" name="uid" class="form-control" value="<?php echo $uid ?>">
                            <button type="submit" class="search-btn" name="searchb" ><i class="fas fa-search"></i></i></button>
                        </div>
                            </body>
                        </form>
                        <!-- $records = mysqli_query($conn,"select * from products"); // fetch data from database -->

                        <?php
              
              if(isset($_GET['searchb']))
              {
                $search=$_GET['search'];
                $productsearch="SELECT * FROM products where phone_name like '%$search%'";
                $records=mysqli_query($conn, $productsearch);
                $myr=mysqli_num_rows($records);
                $val=$myr;
              } 
              else
              {
                $productsearch="SELECT * FROM products";
                $records=mysqli_query($conn, $productsearch);
                $myr=mysqli_num_rows($records);
                $val=$myr;
              }
              
            ?>
                    <li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact1.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="Wishlist_profile.php?uid=<?php echo $uid;?>" class="nav-link">Account</a>
                    </li>
                    <li class="nav-item">
                        <a href="sell_phones.php?uid=<?php echo $uid;?>" class="nav-link">Sell phones</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php?uid=<?php echo $uid;?>" class="nav-link icon"><i class="bx bx-shopping-bag">
                        </i>
                        <span class="cart-basket d-flex align-items-center justify-content-center">            
                        <?php
                        $cartnum=mysqli_query($conn,"SELECT * FROM cart where userid='$uid'");
                        $cartnumdata=mysqli_num_rows( $cartnum);
                        echo $cartnumdata;
                        ?>
                        </span></a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link icon"><i class="bx bx-log-out"></i></a>
                    </li>
                </ul>
            </div>

            <a href="cart.php?uid=$uid" class="cart-icon">
                <i class="bx bx-shopping-bag"></i>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>





    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="phone_image\images\apple.jpg" alt="First slide">
            </div>
        </div>
    </div>







    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>ALL PHONES</h1>
            
        </div>
    <div class="product-center container">
        <?php
        if($val > 0)
        {
                while($data = mysqli_fetch_array($records))
                {

                    
                ?>
        
            <div class="product">
                <div class="product-header">
                    <img src="phone_image/<?php echo $data['phone_image']; ?>" alt="">
                    <ul class="icons">
                        <a href="wish_list_backend.php?phoneid=<?php echo $data['phoneid']; ?>&phone_price=<?php echo $data['phone_price']; ?>&uid=<?php echo $uid ?>"> <span><i class="bx bx-heart"></i></span>
                        </a>
                        <a href="cartbackend.php?phoneid=<?php echo $data['phoneid']; ?>&phone_price=<?php echo $data['phone_price']; ?>&uid=<?php echo $uid ?>"> <span><i class="bx bx-shopping-bag"></i></span>
                        </a>
                        <a href="product-details.php?phoneid=<?php echo $data['phoneid']; ?>&uid=<?php echo $uid; ?>"><span><i class="bx bx-search"></i></span>
                        </a>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.php?phoneid=<?php echo $data['phoneid']; ?>&phone_price=<?php echo $data['phone_price']; ?>">
                        <h3><?php echo $data['phone_name']; ?></h3>
                    </a>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                    </div>
                    <h4 class="price">Rs.<?php echo $data['phone_price']; ?></h4>
                </div>
            </div>
            <?php
            }
        }
            else if($val<=0)
            {

                echo "<h4>Sorry phone is Not Available"; 
                echo "<br>";  
                echo "<br>";  
                echo "<br>";  
                echo "<br>";     
            }
        
            ?>
        </div>
    </section>



    



    <!-- Footer -->
    <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Brands</a>
                    <a href="#">Gift Certificates</a>
                    <a href="#">Affiliate</a>
                    <a href="#">Specials</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Wish List</a>
                    <a href="#">Newsletter</a>
                    <a href="#">Returns</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        42 Dream House, Dreammy street, 7131 Dreamville, USA
                    </div>
                    <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        company@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        456-456-4512
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Dream City, USA
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="javascript/cart.js"></script>
</body>

</html>
<style>                             
    .search-container{
        background: #fff;
        height: 30px;
        border-radius: 30px;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: 0.8s;
        box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
            inset -4px -4px 6px 0 rgba(255,255,255,.2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
    }

    .search-container:hover > .search-input{
        width: 400px;
    }

    .search-container .search-input{
        background: transparent;
        border: none;
        outline:none;
        width: 0px;
        font-weight: 500;
        font-size: 16px;
        transition: 0.8s;

    }

    .search-container .search-btn .fas{
        color: #5cbdbb;
    }
</style>