<?php
$con = new MongoDB\Driver\Manager('mongodb://localhost:27017');
if(isset($_POST['sub']))
{
$upd = new MongoDB\Driver\BulkWrite;
$upd->update(
    ['_id' => new MongoDB\BSON\ObjectID($_GET['upid'])],
    ['$set' => ['name' => $_POST['name'], 'email' => $_POST['email'],'mobile' => $_POST['mobile'],]]
);
$con->executeBulkWrite('AJCE.MCA', $upd);
die(header("Location: view.php"));
}
?>

<html>
<head>
<title>registration</title>
</head>
<body>
<h2>UPDATE</h2>
<form method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" value=""><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" value=""><br>
  <label for="lname">Mobile:</label><br>
  <input type="text" id="lname" name="mobile" value=""><br><br>

  <input type="submit" id="lname" name="sub" value="submit">
</form>



</body>
</html>