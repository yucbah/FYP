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

<link rel="stylesheet" type="text/css" href="chatsupport.css" media="screen" />


</head>
    <title>
      User Profile - Chat Support
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
    <br>
    <br>
    <br>
    <br>

 
<div class="container">

  <div class="grid">
                <div class="row">
                    <div class="col-3">
                       <!-- category -->
                        <nav class="category">

                            <div class="ctghead">

                                <h3><i class="ti-list"></i>Category</h3>
                            </div>

                            <ul class="ctgul">
                                
                                    <a href="3b-products.php" class="ctga">
                                        <i class="ti-user"></i>
                                        Profile</a>
                                </li>

                                <li class="ctgli">
                                  <li class="ctgli showed">
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
                                </li>
                            </ul>
                            <br>
                            <br>
                       </nav>
                    </div>
</div>

<div class="main-container">
      <div class="head-container">
        <h1>• Trader</h1>
        <a href="#" class="btn"
          ><img src="https://svgshare.com/i/Knn.svg" alt="close" class="delete"
        /></a>
      </div>

      <div class="message-container">
        <h3><span class="date">Today</span></h3>
        <div class="sent">
          <h5 class="hour">Just now </h5>
          <p class="sent-bubble">
            Hi Yucef, im your support chat, this line is open for any information and support regrading your inventory list and product details 
          </p>
        </div>
        
        <div class="sent">
          <h5 class="hour">just now</h5>
          <p class="sent-bubble">If youre messaging in regradds to anyrhing other than your inventory listen please go to our contact page and file the message to that email adddress</p>
        </div>
        <div class="blocked">
          <h5 class="hour">typing</h5>
          <p class="blocked-bubble">...</p>
        </div>
      </div>

      <div class="input-container">
        <input type="text" placeholder="Enter your message" />
        <a href="#" class="btn">Send</a>
      </div>
    </div>

    



    </body>