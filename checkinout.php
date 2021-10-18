<?php require_once "./inc/header.inc.php"; ?>
<body class="bg-gray-200">
  <?php require_once "./inc/navbar.inc.php"; ?>
  <div class="flex justify-center pt-10">
    <table class="table-fixed border-collapse border border-green-800">
    <thead>
      <tr>
	<th class="border border-green-600 p-2 w-60">Customer Name</th>
	<th class="border border-green-600 p-2">Product Name</th>
	<th class="border border-green-600 p-2">Product Type</th>
	<th class="border border-green-600 p-2">Start Date</th>
	<th class="border border-green-600 p-2">End Date</th>
	<th class="border border-green-600 p-2">Price</th>
	<th class="border border-green-600 p-2">Check IN/OUT</th>
	<th class="border border-green-600 p-2">DELETE</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "./class/bookingcontr.class.php";
      include "./class/productview.class.php";
      include "./class/customerview.class.php";
      
      $allBookingsObj = new BookingContr();
      $allBookings = $allBookingsObj->allBookings();
      foreach($allBookings as $key=>$booking){
	$productsObj = new ProductView();
	$product = $productsObj->showSingleProduct($booking['product_id']);
	// print_r($product);
	$customerObj = new CustomerView();
	$customer = $customerObj->showSingleCustomer($booking['customer_id']);
	
      ?>
      <tr>
	<td class="border border-green-600 p-2"><?= $customer[0]['name'] ?></td>
	<td class="border border-green-600 p-2"><?= $product[0]['name'] ?></td>
	<td class="border border-green-600 p-2">
	  <?= $product[0]['type'] ?>
	</td>
	<td class="border border-green-600 p-2">
	  <?= $booking['start_date'] ?>
	</td>

	<td class="border border-green-600 p-2">
	  <?= $booking['end_date'] ?>
	</td>
	<td class="border border-green-600 p-2"><?= $product[0]['price'] ?></td>
	<td class="border border-green-600 p-2">
	  <form action="./inc/checkinorout.inc.php"
			method="GET">
	    <?php if($booking['checked_in_out'] == 0){ ?>
	      <input name="id" type="text" value="<?= $booking['id']?>" hidden/>
	      <button class="border border-green-600 p-2 hover:bg-green-500 
			     hover:text-white rounded" type="submit" name="submit" value="in">
		Check In</button>
	    <?php } else { ?>
	      <input name="id" type="text" value="<?= $booking['id']?>" hidden/>
	      <button class="border border-green-600 p-2 hover:bg-red-500 
			     hover:text-white rounded" type="submit" name="submit" value="out">Check Out</button>
		<?php } ?>
	  </form>
	</td>
	<td class="border border-green-600 p-2">
	  <form action="./inc/bookingdelete.inc.php">
	    <input name="id" type="text" value="<?= $booking['id']?>" hidden/>
	    <button class="border border-red-600 p-2 hover:bg-red-500 
			   hover:text-white rounded" type="submit" name="submit">
	      DELETE
	    </button>
	  </form>
	</td>
      </tr>
      <?php }; ?>
    </tbody>
    </table>
  </div>
  

<?php require_once "./inc/footer.inc.php" ?>
