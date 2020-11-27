<?php
	$conn = mysqli_connect('63070054itf.mysql.database.azure.com', 'waveza2@63070054itf', 'Zaza456654', 'ITFlab', 3306);

	$name = $_POST['Name'];
	$comment = $_POST['Comment'];
	$link = $_POST['Link'];
	$id = $_POST['ID'];

    $sql = 'UPDATE guestbook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
    if(mysqli_query($conn, $sql)) {
        echo "EDIT COMPLETED";
    }
    else {
        echo "FAILED TO EDIT";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><a href="show.php" class="btn btn-primary">BACK</a>
</body>
</html>