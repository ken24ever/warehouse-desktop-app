<?php 
$messg = "";
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["name"]) && isset($_POST["code"])  && isset($_POST["price"])  && isset($_POST["cate"])) {

    $name = $_POST["name"]; // filter everything but numbers and letters
    $code =$_POST["code"]; // filter everything but numbers and letters
    $img =$_POST["name"]; // filter everything but numbers and letters
    $image = "$img.jpg";
    $price =$_POST["price"]; // filter everything but numbers and letters
    $cate = $_POST["cate"];

    // Connect to the MySQL database  
    include "connect_db.php"; 
    
        $sql = mysql_query("INSERT INTO tbl_product (name,code,image,price,category) VALUES ('$name','$code','$image','$price','$cate')")or die(mysql_error()); // query the person

          $pid = mysql_insert_id();
  // Place image in the folder 
          $newname = "$pid.jpg";
         // $newname = "$name.jpg";
        move_uploaded_file($_FILES['file']['tmp_name'], "../imgs/$newname");


        $messg .='<div class="panel panel-success"> <div class="panel-body">Product Saved</div> </div>' ;
     }

?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>MOJO ONLINE Shopping </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link id="switch_style" href="../bootstrap/css/united/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/jquery.rating.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
   <div class="row"><!-- start header -->
      <div class="span4 logo">
      <a href="../index.php">
        <h1>MOJO ONLINE</h1>
      </a>
      </div>
      <div class="span8">
      
        <div class="row">
          <div class="span1">&nbsp;</div>
          <div class="span2">
            <h4>Currency</h4>
            <a href="#">USD</a> |
            <a href="#"><strong>GBP</strong></a> |
            <a href="#">NGR</a>
          </div>
          <div class="span2">
            <h4>Shop From Home</h4>
            <a href="#">Items at Cheap Prices</a>
          </div>          
          <div class="span3 customer_service">
            <h4>FREE delivery on ALL orders</h4>
            <h4><small>Customer service: 080 3333 3333</small></h4>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="links pull-right">
            <a href="../index.php">Home</a> |
            <a href="index.php">Admin</a> |
            <a href="../about.php">About</a> |
            <a href="../contact.php">Contact</a>
            <!--<a href="contact.html">Contact</a>-->
          </div>
        
        </div>
      </div>
    </div><!-- end header -->
    
    <div class="row"><!-- start nav -->
      <div class="span12">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container" style="width: auto;">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>

              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse">
              <ul class="nav">
                <li class="dropdown">
                <a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="../index.php">Women Fashion</a></li>
                
                <li class="divider"></li>
                
                </ul>
              </li>
              <li><a href="../index.php">Home</a></li>

              <li><a href="index.php">Admin</a></li>
               <li><a href="../about.php">About</a></li>
              <li><a href="../contact.php">Contact</a></li>
                     <li><a href="../brand.php">Brand</a></li>



              
              
              </ul>

              <!--<ul class="nav pull-right">
               <li class="divider-vertical"></li>
              <form class="navbar-search" action="">
                <input type="text" class="search-query span2" placeholder="Search">
                <button class="btn btn-primary btn-small search_btn" type="submit">Go</button>
              </form>
              
              </ul>-->
            </div><!-- /.nav-collapse -->
            </div>
          </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
      </div>
    </div><!-- end nav -->  
     <div class="row">
    <div class="span3">
      <!-- start sidebar -->
<ul class="breadcrumb">
    <li><a href="index.php">BACK TO ADMIN</a></span></li>
</ul>
<!--<div class="span3 product_list">
  <ul class="nav">
    <li>
      <a class="active" href="category.html">Desktops (12)</a>
      <ul>
        <li><a href="listings.html"> - PC (11)</a></li>
        <li><a class="active" href="listings.html"> - Mac (1)</a></li>
      </ul>
      </li>
    <li>
      <a href="category.html">Laptops &amp; Notebooks (5)</a>
      <ul>
        <li><a href="listings.html"> - Macs (0)</a></li>
        <li><a href="listings.html"> - Windows (0)</a></li>
        </ul>
      </li>
    <li>
      <a href="category.html">Components (2)</a>
        <ul>
        <li><a href="listings.html"> - Mice and Trackballs (0)</a></li>
        <li><a href="listings.html"> - Monitors (2)</a></li>
        <li><a href="listings.html"> - Printers (0)</a></li>
        <li><a href="listings.html"> - Scanners (0)</a></li>
        <li><a href="listings.html"> - Web Cameras (0)</a></li>
        </ul>
      </li>
    <li><a href="category.html">Tablets (1)</a></li>
    <li><a href="category.html">Software (0)</a></li>
    <li><a href="category.html">Phones &amp; PDAs (3)</a></li>
    <li><a href="category.html">Cameras (2)</a></li>
  </ul>
</div> --><!-- end sidebar -->    </div>
       <!-- <div class="span9">

      <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
    <img src="css/images/carousel_1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>First Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>

              </div>
              <div class="item">
                <img src="css/images/carousel_2.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>

              <div class="item">
    <img src="css/images/carousel_3.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
          </div> -->
      
      
      
    <div class="span9 popular_products">
     <h4>Dashboard</h4><br />
    <ul class="thumbnails">

     <li class="span5">
          <div class="thumbnail">
        
               <form class="sa-innate-form" method="post" action="add_product.php" enctype="multipart/form-data">
            <label>Product Name</label>
            <input type="text" name="name">
            <label>Product Code</label>
            <input type="text" name="code">
           
            <label>Product Price</label>
            <input type="text" name="price">
              <label>Category</label>
            <select name="cate">

              <option>--- Tab 1 ---</option>
              <option>Dress</option>
            

                <option>--- Tab 2 ---</option>
               <option>Shirt</option> 
           

                <option>--- Tab 3 ---</option>
               <option>Shoe</option> 
              

       



            </select>
            <label>Product Image</label>
            <input type="file" name="file">
          
            <br/>
            <button type="submit">ADD PRODUCT</button>

           
            </form>
            <?php echo $messg; ?>
         
          </div>
        </li>
       
    <!-- <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/img2.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Nexus one</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
     <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/img3.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Samsung 3D TV</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
     <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/img4.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>iPod Case</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
     <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/img5.JPG" /></a>
            <div class="caption">
              <a href="product.html"> <h5>HMX Camcorder</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
     <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/img6.png" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Kindle Fire</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li> -->

      </ul>
    </div>
      <!-- <div class="span2">
    
     <div class="roe">
    <h4>Newsletter</h4><br />
    <p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.</p>
    
        <form class="form-search">
    <input type="text" class="span2" placeholder="Enter your email" /><br /><br />
    <button type="submit" class="btn pull-right">Subscribe</button>
    </form>
    </div><br /><br />
            <a href="#"><img alt="" title="" src="css/images/paypal1.gif" /></a>
      <a href="#"><img alt="" src="css/images/paypal2.gif" /></a>

    </div> -->
    
      </div><footer>
  <hr />
  <div class="row well no_margin_left" style="background-color: #ccc;">

  <div class="span3">
    <h4>Information</h4>
    <ul>
      <li><a href="../about.php">About Us</a></li>
    
    </ul>
  </div>
  <div class="span3">
    <h4>Customer Service</h4>
    <ul>
      <li><a href="../contact.php">Contact Us</a></li>
      
    </ul>
  </div>
  <div class="span3">
    <h4>Extras</h4>
    <ul>
      <li><a href="../brand.php">Brands</a></li>
      
    </ul>
  </div>
  <div class="span2">
    <h4>Account</h4>
    <ul>
      <li><a href="index.php">Admin</a></li>
    
    </ul>
  </div>

</footer>

</div> <!-- /container -->


<!--<div id="theme_switcher">
  <div class="btn-group">
    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Switch theme <span class="caret"></span></a>
    <ul class="dropdown-menu">
            <li><a href="#" rel="united">United</a></li>
            <li><a href="#" rel="spacelab">Spacelab</a></li>
      <li><a href="#" rel="journal">Journal</a></li>
      <li><a href="#" rel="simplex">Simplex</a></li>
            <li><a href="#" rel="cerulean">Cerulean</a></li>
      <li><a href="#" rel="cyborg">Cyborg</a></li>
            <li><a href="#" rel="slate">Slate</a></li>
            <li><a href="#" rel="spruce">Spruce</a></li>
      <li><a href="#" rel="">Bootstrap</a></li>
    </ul>
  </div>
</div> -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/jquery.rating.pack.js"></script>
<script>
$(function() {
  $('#theme_switcher ul li a').bind('click',
    function(e) {
      $("#switch_style").attr("href", "http://bootswatch.com/"+$(this).attr('rel')+"/bootstrap.min.css");       
      return false;
    }
  );
});
</script>
<!--http://wrapbootstrap.com/preview/WB00223R0-->
</body>
</html>