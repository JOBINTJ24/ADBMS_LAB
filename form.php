<?php
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
echo"connected";
$bulk= new MongoDB\Driver\BulkWrite;
echo"db connected";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $writer= new MongoDB\Driver\BulkWrite;
    $writer->insert(["name"=>"$name","email"=>"$email","mobile"=>"$mobile"]);
    $in=$m->executeBulkwrite('AJCE.MCA',$writer);
    if($in==TRUE)
    {
        header("Location: view.php");
    }
    else{
        echo"not";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>REGISTER</h2>
<form method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" value=""><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" value=""><br>
  <label for="lname">Mobile:</label><br>
  <input type="text" id="lname" name="mobile" value=""><br><br>

  <input type="submit" id="lname" name="submit" value="submit">
</form>



</body>
</html>