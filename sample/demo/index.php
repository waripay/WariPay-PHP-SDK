<?php 
    // Waripay includes
    include '../../lib/WariPay/Core/Init.php';
    include '../../lib/WariPay/Core/CurlHttpClient.php';
    include '../../lib/WariPay/Core/Endpoints.php';
    include '../../lib/WariPay/Auth/AuthorizationToken.php';
    include '../../lib/WariPay/Transaction/Create.php';
?>

<?php
 
    Init('API-WPAY-9b1763d8-2906-11ea-980b-e470b80f3a7e', 'hcamara8@outlook.com');

    function Create_Transaction($customer_email, $amount){
        OPEN_WPAY_SESSION();
        return CREATE_WPAY_TRANSACTION($customer_email, $amount);
    }

    function Get_checkout_link($transactionId){
        return 'https://www.waripay.io/#/Checkout/'.$transactionId;
    }

    $transaction_10_euro = Create_Transaction('hamadi.camara@outlook.com', 10);
    $transaction_20_euro = Create_Transaction('hamadi.camara@outlook.com', 20);
    $transaction_50_euro = Create_Transaction('hamadi.camara@outlook.com', 30);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Pricing Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<! ========================  
    Syed Sahar Ali Raza   	 
  ========================	!>
<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                        <h1>Bootstrap Pricing Table</h1>
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container">
            
            <!--BLOCK ROW START-->
            <div class="row">
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Basic</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">99</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<a class="" href="<?php echo Get_checkout_link($transaction_10_euro) ?>">Payer</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content active clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Standard</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">199</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<a class="" href="<?php echo Get_checkout_link($transaction_20_euro) ?>">Payer</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Unlimited</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">299</span>
                                    <span class="cent">.99</span>
                                    <span class="month">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>2GB</span> Bandwidth</li>
                                <li><span>150GB</span> Storage</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<a class="" href="<?php echo Get_checkout_link($transaction_30_euro) ?>">Payer</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
            </div>	
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             
	<footer>
    	<a class="bottom_btn" href="#">&copy; MrSahar</a>
    </footer>
</div>
<!-- partial -->
  
</body>
</html>