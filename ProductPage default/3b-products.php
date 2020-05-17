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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="default.css" media="screen" />


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="Navbar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="side.css" media="screen" />

</head>
    <title>
      Product-image
    </title>
    <link rel="stylesheet" href="public/3c-theme.css">
    <script src="public/4a-cart.js"></script>
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
      
   

<div  class="container-fluid" id="productView">
  <div id="backButton">
    <button class="btn" id="backBtn">BACK TO TOPS</a>
    </div>
  <div id="productImg">
  <img src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg" alt="" width="450px" height="625px"/>
  </div>
  <div id="smallproductImg">
 <img src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg" alt="" width="110px" height="150px"/>
  </div>
  <div id="productDetails">
    <p id="nameText">Womens Blouse</p>
    <br />
    <br />
    <p id="colorText">COLOR: </p>
    <br />
    <br />
    <br />
    <button class="colorBtn" id="color1"></button>
    <div id="color2"></div>
    <h5 id="sizeTitle">SIZE:</h5>
    <button id="szSmall" class="sizeButton">SMALL</button>
    <button id="szMedium" class="sizeButton"><strike>MEDIUM</strike></button>
    <button id="szLarge" class="sizeButton">LARGE</button>
    <button id="szXLarge" class="sizeButton"><strike>XLARGE</strike></button>
    <h4 id="priceLabel">$9.99 <p>per 10 units*</p><h4>
      <br>
      <br>
      <br>
   <!--  <button id="addBtn" >ADD TO BAG</button> -->
    <br>
    <br>
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Inventory
    <span class="caret"></span></button>

  <div class="dropdown-content">
  <table>
    <tr>
      <th> Id</th>
      <th>Product</th>
      <th>Units</th>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "input");
  //  Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT ID, Product, units FROM input";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Product"] . "</td><td>"
        . $row["units"]. "</td></tr>";
      }
      echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
  </table>
  </div>
</div> 

  <!--   --------------------------------------- -->
  <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.dropdown {
  position: relative;
  bottom:-190px;
  left:300px;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style> 
</head>
<body>
  




  <!--   --------------------------------------- -->



    <h5 id="descTitle">DESCRIPTION</h5>
<ul>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <li>40% cotton ,60%polyester</li>
  <li>Min order 100</li>
</ul>  
<br>
<br>
    <button class="btn" id="chartButton">SIZE CHART</button>
    <button class="btn" id="srButton">SHIPPING/RETURNS</button>
  </div>
</div>

   
    <form style=" position:relative;
  left:990px;top:-320px" id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="https://script.google.com/macros/s/AKfycbxXwV8zHsREpugrvy7FwG4BBjRmWchq3W0A9sJxfQ/exec">

          <style>
            .gform{
  position:relative;
  left:220px;

}
          </style>
          

        <label for="name">Name: </label>
        <input id="name" name="name" placeholder="First Name" />

        <br>

        <label for="message">Message: </label>
        <textarea id="message" name="message" rows="10"
                  placeholder="Your Proposal ..."></textarea>
        <br>

        <label for="email"><em>Your</em> Email Address:</label>
        <input id="email" name="email" type="email" value=""
               required placeholder="your.name@email.com" />



        <button class="button-success pure-button button-xlarge">
            <i class="fa fa-paper-plane"></i>&nbsp;Send
        </button>

    </form>


    <div style="display:none;" id="thankyou_message">
        <h2>
            <em>Thanks</em> Seller will review your proposal and get back to you via email !
        </h2>
    </div>


    <script data-cfasync="false" type="text/javascript"
            src="https://cdn.rawgit.com/dwyl/learn-to-send-email-via-google-script-html-no-server/master/form-submission-handler.js"></script>
          </body>

</body>
 














 
  

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<br>

    <!-- [CART] -->
    <div id="page-cart" class="ninja"></div>
  </body>
</html>