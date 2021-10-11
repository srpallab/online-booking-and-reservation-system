<?php require "./inc/header.inc.php" ?>
<div class="flex justify-center items-center">
  <div class="w-40">
    <?php require "./inc/navbar.inc.php" ?>
  </div>
  <div class="bg-gray-200 h-screen w-full">
    <div class="container mx-auto flex p-5 justify-center">
      <h1 class="m-2 p-2 text-center text-2xl">FROM</h1>
      <input name="todate" type="date" class="m-2 p-2 text-center border border-gray-200" />
      <h1 class="m-2 p-2 text-center text-2xl">TO</h1>
      <input name="enddate" type="date" class="m-2 p-2 text-center border border-gray-200" />
      <button class="m-2 py-2 px-10 text-center bg-gradient-to-b from-green-300 to-green-600 border 
		     focus:border-green-900 text-white rounded">FIND</button>
    </div>
  </div>
</div>
<?php require "./inc/footer.inc.php" ?>
