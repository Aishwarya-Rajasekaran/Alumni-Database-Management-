<!DOCTYPE html>
<html>
<body bgcolor="#9696f7">
<h1 style="color:blue">Location-wise Alumni</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "alumni";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$city = mysqli_real_escape_string($conn,$_GET['cloc']);
$required=mysqli_query($conn, "select fname,mname,lname,batch,degree from alumnii a ,iiitdm b ,pinfo c where a.pemail_id=b.pemail_id and c.pemail_id=b.pemail_id and c.city='$cloc';");
$number=mysqli_num_rows($required);
if ($number>0)
{   
    echo "<table><tr><th>First_Name</t></t></th><th>Middle_Name</t></t></th><th>Last_name</t></t></th><th>Batch</t></t></th><th>Degree</t></t></th></tr>";     
 while(mysqli_fetch_row($required)!=NULL)
{
    $row=mysqli_fetch_row($required);

echo "<tr>";
foreach($row as $data)
echo"</t></t><td>{$data}</td>";
echo"</tr></br>";
}echo "</table>"; 
}else
    echo "No match found</br>" ;
mysqli_close($conn);
?>
</body>
</html>
