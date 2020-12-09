<?php
session_start();
?>
<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}
$user1=$_SESSION["user"];
$dname=$_SESSION["dname"];
$vacancy = "SELECT * from patient_signup where Appointment='10:00:00' and dname='$dname'";
$result = $conn->query($vacancy);
if(!empty($result) && $result->num_rows>0 ){
    echo '<script type="text/javascript">alert("Appointment Already Fixed, choose another time slot");window.location=\'appoint2.php\';</script>';
}
else{
$sql="update patient_signup set Appointment='04:00:00' where email='$user1'";
if(!mysqli_query($conn,$sql))
{
    echo "Not inserted";
}
else{
    echo '<script type="text/javascript">alert("Appointment Fixed");window.location=\'index.html\';</script>';
}
}

?>
