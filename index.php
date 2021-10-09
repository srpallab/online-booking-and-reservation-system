<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet"/>
    <title>Online Reservation and Booking System</title>
  </head>
  <body class="bg-gradient-to-r from-green-400 to-blue-500">
    <div class="container mx-auto flex items-center flex-col h-screen justify-center">
      <h1 class="text-6xl text-center text-white">Online Reservation and Booking System</h1>
      <div class="grid grid-cols-3 gap-10 pt-10">
	<a href="booking.php?resort=car">
	  <div class="orbs-bg-img-car rounded-lg border-2 hover:border-green-700 h-60 w-96 transform hover:scale-110"></div>
	  <h1 class="text-4xl text-white text-center mt-5">Vehicles Booking</h1>
	</a>
	<a href="booking.php?type=resort">
	  <div class="orbs-bg-img-resort rounded-lg border-2 hover:border-green-700 h-60 w-96 transform hover:scale-110"></div>
	  <h1 class="text-4xl text-white text-center mt-5">Resort Booking</h1>
	</a>
	<a href="booking.php?type=room">
	  <div class="orbs-bg-img-room rounded-lg border-2 hover:border-green-700 h-60 w-96 transform hover:scale-110"></div>
	  <h1 class="text-4xl text-white text-center mt-5">Hotel Room Booking</h1>
	</a>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/fc813874b8.js" crossorigin="anonymous"></script>
  </body>
</html>
