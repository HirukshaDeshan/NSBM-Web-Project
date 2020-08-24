<?php

    $checkIN = $_POST['checkIndate'];
    $checkOUT = $_POST['checkOutdate'];
    $rooms = $_POST['rooms'];
    $adultRooms = $_POST['adults'];
    $ChildRooms = $_POST['children'];

    $sql = "INSERT INTO bookinghotel(checkin,checkout,rooms,adult,children) VALUES('{$checkIn}','{$checkOUT}','{$rooms}','{$adultRooms}','{$ChildRooms}',)";
	if (mysqli_query($connection, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
	


?>