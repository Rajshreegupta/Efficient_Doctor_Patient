<html>
<head>
<title>Appointment doctor</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
        
    
        <div class="a1"><h2>EFFICIENT DOCTOR PATIENT</h2></div>
        <div id="frm">
                <h3 class="a1">Appointment</h3>
                <ul>
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="hello.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about.html">About</a></li>
                        </ul>
<form action="appoint.php" method="POST">
<!-- Doctor:<br> -->
<!-- <input type="text" name="Doctor"><br> -->
<table>
    <tr>
    <th>DOCTOR</th>
    <th>SPECIALITY</th>
</tr>
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
$user1=$_SESSION["user1"];
$sql = "SELECT name, speciality from doctor";
$result = $conn->query($sql);
if(!empty($result) && $result->num_rows>0 )
 {
     while($row = $result->fetch_assoc())
     {
        echo "<tr>";
        echo '<td align="center">'. $row["name"]."\t".'</td>';
        echo '<td align="center">'. $row["speciality"]."\t".'</td>';
        echo "<td>"." <div name='Doctor' class='button_cont' ><a href='appoint.php' class='example_e' target='_blank' rel='nofollow noopener'>SELECT</a></div>"."</td>";
        echo "<br>";
     }
}
// <div  class="button_cont" align="center"><input type="submit" class="example_e" target="_blank" rel="nofollow noopener" value='  SUBMIT  '></div>
?>
</form>
</div>
</body>
</html>
