<?php session_start(); ?>
<nav class="container mx-auto">
  <ul class="flex justify-around items-center">
    <li class="py-2">
      <i class="fas fa-home pr-2"></i>
      <a href="index.php">HOME</a>
    </li>
    <?php
    if(!isset($_SESSION['user_id'])){
    ?>
    <li class="py-2">
      <a href="login.php"
	 class="bg-green-500 text-white py-1 px-2 rounded">
	LOG IN
      </a>
    </li>
    <?php
    } else {
    ?>
    <li class="py-2">
      <i class="fas fa-cash-register pr-2"></i>
      <a href="checkinout.php">CHECK IN/OUT</a>
    </li>
    <li class="">
      <a href="/inc/logout.inc.php"
	 class="bg-red-500 text-white py-1 px-2 rounded">
	LOG OUT
      </a>
    </li>
    <?php
    }
    ?>
  </ul>
</nav>
