
<?php 
	// Waripay includes
	include '../../lib/WariPay/Core/Init.php';
	include '../../lib/WariPay/Core/CurlHttpClient.php';
	include '../../lib/WariPay/Core/Endpoints.php';
	include '../../lib/WariPay/Auth/AuthorizationToken.php';
	include '../../lib/WariPay/Transaction/Create.php';
?>

<?php

$YOUR_WARIPAY_API_KEY = 'API-WPAY-ce56b8f8-3152-11ea-8cf3-0050560641f9';
$YOUR_WARIPAY_EMAIL_ADDRESS = 'developer@waripay.io';
$REDIRECT_SUCCESS_URL = 'https://waripay.io/#/Payment/return?code=200';
$REDIRECT_ERROR_URL = 'https://waripay.io/#/Payment/return?code=500';

// Turn on Sandbox mode
$MODE = 'SANDBOX';
INIT($YOUR_WARIPAY_API_KEY, $YOUR_WARIPAY_EMAIL_ADDRESS, $MODE);
/////////////////////////

CONFIG_REDIRECT($REDIRECT_SUCCESS_URL, $REDIRECT_ERROR_URL);

function Create_Transaction($customer_email, $amount){
	OPEN_WPAY_SESSION();
	return CREATE_WPAY_TRANSACTION($customer_email, $amount);
}

function Get_checkout_link($customer_email, $amount){
	$transactionId = Create_Transaction($customer_email, $amount);
	return 'https://www.waripay.io/#/Checkout/'.$transactionId;
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>WariPay</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<nav class="product-filter">
		<h1>Jackets</h1>
		
		<div class="sort">
			<div class="collection-sort">
				<label>Filter by:</label>
				<select>
		      <option value="/">All Jackets</option>
		      <option value="/">2016</option>
		      <option value="/">jacket</option>
		      <option value="/">Jackets</option>
		      <option value="/">layers</option>
		      <option value="/">Obermeyer</option>
		      <option value="/">Roxy</option>
		      <option value="/">womens</option>
		   	</select>
			</div>
			
			<div class="collection-sort">
				<label>Sort by:</label>
				<select>
		      <option value="/">Featured</option>
		      <option value="/">Best Selling</option>
		      <option value="/">Alphabetically, A-Z</option>
		      <option value="/">Alphabetically, Z-A</option>
		      <option value="/">Price, low to high</option>
		      <option value="/">Price, high to low</option>
		      <option value="/">Date, new to old</option>
		      <option value="/">Date, old to new</option>
		    </select>
			</div>
		</div>
	</nav>
	
	<section class="products">
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
		<div class="product-card">
			<div class="product-image">
				<img src="https://cdn.shopify.com/s/files/1/0938/8938/products/10231100205_1_1315x1800_300_CMYK_1024x1024.jpeg?v=1445623369">
			</div>
			<div class="product-info">
				<h5>Winter Jacket</h5>
				<h6>$99.99</h6>
				<a href="<?php echo Get_checkout_link('your_customer_email@waripay.io', 99.99) ?>" >Buy</a>
			</div>
		</div>
		
	</section>
<!-- partial -->
  
</body>
</html>