<!DOCTYPE html>
<html>
<body>
<h2>REGISTER</h2>
<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Action</th>
</tr>
<?php
$con=new MongoDB\Driver\Manager('mongodb://localhost:27017');
echo'connected';
$bulk= new MongoDb\Driver\BulkWrite;
$query=new MongoDB\Driver\Query([],[]);
$documents=$con->executeQuery('AJCE.MCA',$query);
foreach($documents as $doc){
    ?>
<tr>
    <td><?php echo($doc->name) ?></td>
    <td><?php echo($doc->email) ?></td>
    <td><?php echo($doc->mobile) ?></td>
    <td>
    <a href="delete.php?del=<?php echo($doc->_id) ?>" class="del_btn"><input type="submit" value="delete"></a>
	
    
    <a href="update.php?upid=<?php echo($doc->_id) ?>" class="del_btn"><input type="submit" value="Update"></a>
	</td>
</tr>
<?php
}
?>
</table>
</body>
</html>