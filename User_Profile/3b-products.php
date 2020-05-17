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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Navbar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="side.css" media="screen" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://wagtrung.github.io/store/themify-icons/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="user.css" media="screen" />
  


</head>
    <title>
      User Profile
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
        <!---Title bar-->
    <div class="Logo">
      <img src="Traderlogo.png" style="width:20%">
    </div>
    <!--log in-->

        <!--Navbar-->
  <div class="navbar">
    <a href="3b-products.php">Home</a>
    <a href="http://127.0.0.1:3000/ProjetPage/ProjectPage.html">Project</a>
    <a href="http://127.0.0.1:3000/Contacts/contacthome.html">Contact</a>
    <a href="http://127.0.0.1:3000/Member/Membership.html">Membership</a>

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


<div style="position:relative;top:60px"class="container">
  <div class="grid">
    
                <div class="row">
                
                    <div class="col-3">
                        <!-- category -->
                        <nav class="category">

                            <div class="ctghead">

                                <h3><i class="ti-list"></i>Category</h3>
                            </div>

                            <ul class="ctgul">
                                <li class="ctgli showed">
                                    <a href="3b-products.php" class="ctga">
                                        <i class="ti-user"></i>
                                        Profile</a>
                                </li>

                                <li class="ctgli">
                                    <a href="ChatSupprt.php" class="ctga">
                                        <i class="ti-comment"></i>
                                        Chat support</a>
                                </li>

                                <li class="ctgli">
                                    <a href="userinvoice.php" class="ctga ">
                                        <i class="ti-write"></i>
                                        Invoice
                                       
                                    </a>
                                </li>
                            </ul>
                            <br>
                            <br>
                       </nav>
                    </div>
</div>

     <div style="position :relative;left:320px; top:-300px; "class="wrapper">
      
        <div class="container-fluid">
                <div class="col-md-12">
                  <div class="row">
                    <div class="page-header">
                    </div>
                    <p>Add to your inventory list .</p>
                    <br>
                    <br>
                    <form action="insert.php" method="post">
                      <br>
 
                        <div class="form-group">
                            <br><label>Product name</label>
                            <input type="text" name="product" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Units</label>
                            <input type="text" name="units" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
<script>

  $(".ctgli:has(.ctgulChild)").click(function (e) {
    e.preventDefault();
    //li_HAVE_Child-hasShowed-hasSlideD
    if($(this).hasClass('showed')){
        //-x-hasShowed
        $('.ctgli').removeClass('showed');
        //-x-hasSlideD
        $(this).children('.ctgulChild').slideUp();
        
    }
    
    else{
        
        $('.ctgulChild').slideUp();
        $('.ctgli').removeClass('showed');

        $(this).addClass('showed');
        $(this).children('.ctgulChild').slideToggle();
      
    }
});

$('.ctgli').click(function(){
    $(this).toggleClass('wtok');
});

</script>
   <table id="products">
    <style>
      #products{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 200%;
  position:relative;
  left:-380px;
}
</style>
<h2> Current inventory list</h2>
    <tr>
      <th>Id</th>
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
  <br>
  <br>
  <h2> Responsse sheet offers.</h2>
  <iframe style="position:relative;left:25px;width:900px;"src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRf57JCvB0KTGNrSbZwtZ4hFv5FoI9FLagRn465nKAg5ScYOtzqb5nAlNoFRy__zRR2MlmQeryhdNCP/pubhtml?widget=true&amp;headers=false"></iframe>

</div>     
    </body>