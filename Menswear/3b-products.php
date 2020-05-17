<?php
/* [INIT - GET PRODUCTS] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-db.php";
require PATH_LIB . "3a-lib-products.php";
$pdtLib = new Products();
$products = $pdtLib->get();

/* [HTML] */ ?>
<!DOCTYPE html>
<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Navbar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="CSS\side.css" media="screen" />
<link rel="stylesheet" type="text/css" href="CSS\productpage.css" media="screen" />
    <script src="public/4a-cart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    <title>
      Menswear
    </title>
  <body>
    <header id="page-header">
      <!-- [CART BUTTON] -->
      <div id="page-cart-icon" onclick="cart.toggle();">
        &#128722; <span id="page-cart-count">0</span>
      </div>
      <a href= "/User_Profile/3b-products.php"> <p>User Profile </p>
        <!---Title bar-->
    <div class="Logo">
      <img src="Traderlogo.png" style="width:20%">
    </div>
    <!--log in-->

        <!--Navbar-->
  <div class="navbar">
    <a href="/Front-End/HomePage.html">Home</a>
    <a href="/Front-End/ProductPage.html">Products</a>
    <a href="/Front-End/ContactPage.html">Contact</a>
    <a href="/Front-End/Membership.html">Membership</a>

    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>

    <input class="Search" type="text" placeholder="Search" aria-label="Search" style= "width:20%; float:right; padding:0px 4px">
    <div id="google_translate_element" style= "width:15%"></div>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>

<script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
</script>


    </header>


    <br>
    <br>
      
    <h3>CATEGORIES</h3>
    <div style= "position:relative; left:-70px" class="checklist categories">
      <ul>
          <li><a href="/Product/3b-products.php"><span></span>Home</a></li>
           <li><a href="/Trade Products/3b-products.php"><span></span>Trade</a></li>
            <li><a href="/Women/3b-products.php"><span></span>Womenswear</a></li>
            <li><a href=""><span></span>Bags</a></li>
            <li><a href="/Menswear/3b-products.php"><span></span>Menswear</a></li>
            <li><a href=""><span></span>jewelry</a></li>
            <li><a href=""><span></span>Shoes</a></li>
            <li><a href=""><span></span>Shirts</a></li>
            <li><a href=""><span></span>Sweaters</a></li>
            <li><a href=""><span></span>T-shirts</a></li>
        </ul>
    </div>
    
    <h3>COLORS</h3>
    <div  style= "position:relative; left:-70px" class="checklist colors">
      <ul>
          <li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
          <li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
    </div>
    
   
    <div  style= "position:relative; top:200px; left:-325px" class="checklist sizes">
      <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIZES</h3>
      <ul>
          <li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
          <li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
    </div>
    
     
</div>



    <!-- [PRODUCTS] --> 
    <div  style= "position:relative; right:-180px; bottom: 1100px" id="page-products"><?php
      if (is_array($products)) {
        foreach ($products as $id => $row) { ?>
          <div class="pdt">
            <img class="pdt-img" src="images/<?= $row['product_image'] ?>"/>
            <h3 class="pdt-name"><?= $row['product_name'] ?></h3>
            <div class="pdt-price">$<?= $row['product_price'] ?></div>
            <div class="pdt-desc"><?= $row['product_description'] ?></div>
            <input class="pdt-add" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php }
      } else {
        echo "No products found.";
      }
      ?></div>

<br>

    <!-- [CART] -->
    <div style="position:relative; left:220px; top:-1100px;" id="page-cart" class="ninja"></div>
  </body>
</html>