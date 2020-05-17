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
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    <title>Profile- Invoice</title>
    
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js'></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="Navbar.css" media="screen" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://wagtrung.github.io/store/themify-icons/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="user.css" media="screen" />

<link rel="stylesheet" type="text/css" href="chatsupport.css" media="screen" />
<link rel="stylesheet" type="text/css" href="invoice.css" media="screen" />


</head>
    <title>
      User Profile - Invoice
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
                                    <a href="ChatSupprt.php" class="ctga">
                                        <i class="ti-comment"></i>
                                        Chat support</a>
                                </li>

                                <li class="ctgli">
                                  <li class="ctgli showed">
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

    <div id="page-wrap">

        <textarea id="header">INVOICE</textarea>
        
        <div id="identity">
        
            <textarea id="address">Trader
DMU Gateway street

Phone: (555) 555-5555</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
              </div>
              <img id="image" style="width:300%;float:left"src="imgs/Traderlogo.png" alt="logo" />
            </div>
        
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">

            <textarea id="customer-title">Yucef Bahri Creations</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">May 18, 2020</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$450.00</div></td>
                </tr>

            </table>
        
        </div>
        
        <table id="items">
        
          <tr>
              <th>Item</th>
              <th>Description</th>
              <th>Unit Cost</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>T-shirt dress</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
              <td class="description"><textarea>Nice Tshirt dresses... </textarea></td>
              <td><textarea class="cost">$350.00</textarea></td>
              <td><textarea class="qty">100</textarea></td>
              <td><span class="price">$350.00</span></td>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>Bic Pens</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

              <td class="description"><textarea> Really nice pens...</textarea></td>
              <td><textarea class="cost">$50.00</textarea></td>
              <td><textarea class="qty">300</textarea></td>
              <td><span class="price">$50.00</span></td>
          </tr>
          
          <tr id="hiderow">
            <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
          </tr>
          
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Subtotal</td>
              <td class="total-value"><div id="subtotal">$400.00</div></td>
          </tr>
          <tr>

              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total</td>
              <td class="total-value"><div id="total">$450.00</div></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Amount Paid</td>

              <td class="total-value"><textarea id="paid">$0.00</textarea></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line balance">Balance Due</td>
              <td class="total-value balance"><div class="due">$450.00</div></td>
          </tr>
        
        </table>
        
        <div id="terms">
          <h5>Terms</h5>
          <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
        </div>
    
    </div>
    
    </body>