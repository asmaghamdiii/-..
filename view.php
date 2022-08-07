<?php
$conn = mysqli_connect('localhost', 'robot', 'robot1234', 'Robot Controller');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}


	// write query for all pizzas
	$sql = 'SELECT * FROM `direction`';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$direction = mysqli_fetch_all($result, MYSQLI_ASSOC);


 		echo $direction[count($direction)-1]['Forwards'];
 		echo $direction[count($direction)-1]['Backwards'];
 		echo $direction[count($direction)-1]['Right'];
 		echo $direction[count($direction)-1]['Left'];
 		echo $direction[count($direction)-1]['Stop'];


	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);



 ?>
