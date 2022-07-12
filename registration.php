<?php
$con=new MongoDb\Driver\Manager('mongodb://localhost:27017');
echo "coonected";
$bulk=new MongoDb\Driver\BulkWrite;
echo "connected";
if(isset($_POST['sub'])){
$name=$_POST['name'];
$roll=$_POST['roll'];
$writer=new MongoDb\Driver\BulkWrite;
$writer->insert(['name'=>"$name","roll"=>"$roll"]);
$in=$con->exicuteBulkwrite("AJCE.MCA",$writer);
if(in==TRUE)
{
	header("Location: view.php");
}
else{
	echo "not connected";
}
}?>
<form method="POST">
<label for="name">NAME:</label>
<input type="text" id="name" name="nama" placeholder="enter youre name"><br>
<label for="roll">ROLL:</label>
<input type="text" id="name" name="roll" placeholder="enter youre roll"><br>
<input type="submit" id="name" name="sub" value="Submit">
</form>

