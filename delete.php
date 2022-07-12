
<?php
$con = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$del = new MongoDB\Driver\BulkWrite;
$del->delete(['_id' => new MongoDB\BSON\ObjectID($_GET['del'])]);
$con->executeBulkWrite('AJCE.MCA', $del);
echo "Succesfully deleted";
die(header("Location: view.php"));
?>