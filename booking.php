<?php
require_once "./inc/header.inc.php";
require_once "./class/productview.class.php";
?>
<body class="bg-gray-200">
  <div class="bg-white">
    <?php require "./inc/navbar.inc.php" ?>
  </div>

<div class="flex justify-center items-center">
  <div class=" w-full">
    <!--
	 <div class="container mx-auto flex p-5 justify-center">
	 <h1 class="m-2 p-2 text-center text-2xl">FROM</h1>
	 <input name="todate" type="date" class="m-2 p-2 text-center border border-gray-200" />
	 <h1 class="m-2 p-2 text-center text-2xl">TO</h1>
	 <input name="enddate" type="date" class="m-2 p-2 text-center border border-gray-200" />
	 <button class="m-2 py-2 px-10 text-center bg-gradient-to-b from-green-300 to-green-600 border 
	 focus:border-green-900 text-white rounded-lg">FIND</button>
	 </div>
    -->
  <div class="grid grid-cols-4 gap-5 container mx-auto my-5">
	<?php
	$productsObj = new ProductView();
	// print_r($_GET);
	// die();
	$products = $productsObj->showProducts($_GET['type']);
	// print_r($products);
	// die();
	foreach($products as $key=>$product){
	?>
	  <div class="flex flex-col justify-center border border-gray-300 rounded px-5 pb-5 shadow">
	    <img alt="" src="<?= $product['image_link'] ?>"/>
	    <h1 class="text-2xl text-center"><?= $product['name'] ?></h1>
	    <p class="text-lg">Model: <?= $product['model'] ?></p>
	    <p class="text-lg">Price: <?= $product['price'] ?></p>
	    <button class="py-2 px-5 bg-green-500 text-white rounded">Book Now</button>
	  </div>
	<?php }; ?>
      
    </div>
  </div>
</div>
<?php require "./inc/footer.inc.php" ?>
