<?php
$con=mysqli_connect("localhost","root","","database");
if($con)
{
$file=$_FILES['excel']['tmp_name'];
$handle=fopen($file,"r");
$i=0;
while(($con=fgetcsv($handle,1000,","))!=false)
{
$table=rtrim($__FILES['excel'],['name'],".csv");
if($i==0)
{
$name=$cont[0];
$age=$cont[1];
$gender=$cont[2];
$email=$cont[3];
$Marks=$cont[4];
$query="CREATE TABLE $table($name varchar(10),$age int(2),$gender varchar(10),$email varchar(50),$marks int(5));";
echo $query,"<br>";
mysqli_query($con,$query);
}
else{
$query="INSERT INTO $table($name,$age,$gender,$email,$marks) VALUES('$cont[0]','$cont[1]','$cont[2]',$'cont[3]','$cont[4]')";
echo $query,"<br>";
}
$i++;
}
}
else
{
echo"CONNECTION FAILED";
}
?>
