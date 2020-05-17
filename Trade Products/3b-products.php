<?php
/* [INIT - GET PRODUCTS] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-db.php";
require PATH_LIB . "3a-lib-products.php";
$pdtLib = new Products();
$products = $pdtLib->get();

/* [HTML] */ ?>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<link rel="stylesheet" type="text/css" href="CSS/Navbar.css" media="screen" />

<link rel="stylesheet" type="text/css" href="CSS/3c-theme.css" media="screen" />

<link rel="stylesheet" type="text/css" href="CSS/side.css" media="screen" />

<link rel="stylesheet" type="text/css" href="CSS/style.css" media="screen" />

<link rel="stylesheet" type="text/css" href="CSS/footer.css" media="screen" />

</head>


<body>

   <title>
      Womenswear Trade
    </title>
    <link rel="stylesheet" href="public/3c-theme.css">
    <script src="CSS/public/4a-cart.js"></script>
  </head>
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

</div>
</header>
<br>
<h3>CATEGORIES</h3>
    <div style= "position:relative; left:-30px" class="checklist categories">
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
    <div  style= "position:relative; left:-40px" class="checklist colors">
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
    
   
    <div  style= "position:relative; top:200px; right:300px" class="checklist sizes">
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



<h1 style="position:relative;top:-420px; left:-220;">Clothing</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="/ProductPage default/3b-products.php">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="ProductPage% default/3b-products.php">Women's Blouse</a></h3>
                    <div class="price">$9.99
                        <span>$15.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://www.bestjquery.com/tutorial/product-grid/demo7/images/img-3.jpg">
                        <img class="pic-2" src="https://www.bestjquery.com/tutorial/product-grid/demo7/images/img-4.jpg">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Womens floral blouse</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
                        <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">10%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Summer blue blouse</a></h3>
                    <div class="price">$12.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://www.bestjquery.com/tutorial/product-grid/demo7/images/img-8.jpg">
                        <img class="pic-2" src="https://www.bestjquery.com/tutorial/product-grid/demo7/images/img-7.jpg">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Smart white shirt</a></h3>
                    <div class="price">$10.00
                        <span>$15.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                        <img class="pic-2" src="https://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">30%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Mens blazer</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://bestjquery.com/tutorial/product-grid/demo5/images/img-3.jpg">
                        <img class="pic-2" src="https://bestjquery.com/tutorial/product-grid/demo5/images/img-4.jpg">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Mens Navy blue shirt</a></h3>
                    <div class="price">$9.00
                        <span>$15.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                        <img class="pic-2" src="https://bestjquery.com/tutorial/product-grid/demo5/images/img-6.jpg">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">15%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Linen long sleeve shirt </a></h3>
                    <div class="price">$10.00
                        <span>$15.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                        <img class="pic-2" src="https://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
                    </a>
                      </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">12%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Mens navy POLO </a></h3>
                    <div class="price">$9.99
                        <span>$5.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
    </div>

<br>

        <br>
        
<h2 style="position: relative;top:-420px; left:240px;">Gadgets</h2>
<div style="position:relative; left:390px;" class="container">
    <div class="row">

         <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/jbl-flip-5-speaker-in-black/12013006-1-multi?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/jbl-flip-5-speaker-in-black/12013006-3?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Grey joggers</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/skinnydip-marble-airpod-case/14397156-3?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/skinnydip-marble-airpod-case/14397156-1-marble?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Yellow pokadot</a></h3>
                    <div class="price">$7.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/typo-shower-speaker-in-tie-dye/14477448-1-multi?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/typo-shower-speaker-in-tie-dye/14477448-4?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Nike sweater</a></h3>
                    <div class="price">$15.00
                        <span>$30.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<h2 style="position:relative; left:230px;top:-430px;">Bags</h2>
<div style="position:relative; left:390px;" class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/asos-design-croc-backpack/12460990-1-black?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/asos-design-croc-backpack/12460990-2?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Trade</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="ProductPage% default/3b-products.php">Women's Blouse</a></h3>
                    <div class="price">$9.99
                        <span>$15.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/asos-design-suede-bucket-bag/12756019-1-black?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/asos-design-suede-bucket-bag/12756019-3?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Womens floral blouse</a></h3>
                    <div class="price">$5.00
                        <span>$10.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.asos-media.com/products/nike-black-boxy-mini-backpack/11803157-1-blackblack?$XXL$&wid=513&fit=constrain">
                        <img class="pic-2" src="https://images.asos-media.com/products/nike-black-boxy-mini-backpack/11803157-3?$XXL$&wid=513&fit=constrain">
                    </a>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">10%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Summer blue blouse</a></h3>
                    <div class="price">$12.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart" href="">+ Trade</a>
                </div>
            </div>
        </div>
       

        


<footer id="red">

    <style>

        @import url(https://fonts.googleapis.com/css?family=Lato:900);

#red{ 
  border-top: solid #ebebeb;
  border-width: 15px;
  background: #f7eadf; 
  position:absolute; 
  bottom:0;
  width:1500px;
  left:-570px;
  height:280px; 
}

.text {
  color: #424242;
  font-family: Lato;
  font-size: 60px;
  text-align: center;
  margin-top: 50px;
}

.text2 {
  color: #424242;
  font-family: Lato;
  font-size: 20px;
  text-align: center;
  margin-top: -50px;
}

.text3 {
  color: #424242;
  font-family: Lato;
  font-size: 20px;
  text-align: center;
  margin-top: -20px;
  float: center;
}
.text4 {
  color: #424242;
  font-family: Lato;
  font-size: 20px;
  text-align: center;
  margin-top: -20px;
  float: center;
}




    </style>
  <h1 class="text">Trader</h1>
  <br>
  <br>
  <h2 class="text2">&copy;  DIMENSIONMC - DESIGNED BY Yucef Bahri</h2>
  <br>
  <h2 class="text3">-POWERED BY DMU-</h2>
  <br>
  <h2 class="text4">Gateway Street DMU
+44 555 555
    support@Trader.com</h2>
</footer>
</body>
</html>
