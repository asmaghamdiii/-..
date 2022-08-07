
<?php
// check connection
$conn = mysqli_connect('localhost', 'robot', 'robot1234', 'Robot Controller');

// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

if (isset($_POST['Forwards'])) {
	$sql = "INSERT INTO `direction` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, 'F', '', '', '', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}

if (isset($_POST['Backwards'])) {
	$sql = "INSERT INTO `direction` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', 'B', '', '', '')";	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}

if (isset($_POST['Right'])) {
	$sql = "INSERT INTO `direction` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', 'R', '', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}
if (isset($_POST['Left'])) {
	$sql = "INSERT INTO `direction` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', '', 'L', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
		}
if (isset($_POST['Stop'])) {
	$sql = "INSERT INTO `direction` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', '', '', 'S')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}
			mysqli_close($conn);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Robot Controller</title>
  <link rel="stylesheet" type="text/css" href="RobotController.css">




    <form action="index.php" method="post">

      <button  id = "Forwards" name = "Forwards" class="btn btn-primary Style">Forwards</button>

          <button  id = "Backwards" name = "Backwards"class="btn btn-primary Style">Backwards</button>

          <button  id = "Right" name = "Right" class="btn btn-primary Style">Right</button>

          <button  id = "Left" name= "Left" class="btn btn-primary Style">Left</button>

          <button  id = "Stop" name = "Stop" class="btn btn-primary Style">Stop</button>
    </form>




 </html>
