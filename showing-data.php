<!--

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Full Name</th>
<th>Email</th>
<th>Border Nummber</th>
</tr>

-->

<!--
// < ? php
//$conn = mysqli_connect("localhost", "root", "", "bbsmrh");
// Check connection
/*if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT student_full_name, student_email, student_border_number FROM tbl_student_registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["student_full_name"]. "</td><td>" . $row["student_email"] . "</td><td>"
. $row["student_border_number"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
*/
-->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangabandhu Sheikh Mujibur Rahman Hall</title>

    <style>
    
    
    
    </style>
</head>
<body>
    
    <table class="student-information-table">
        <tr>
            <th><?php $heading_for_student_full_name ?></th>
            <th><?php $heading_for_student_email ?></th>
            <th><?php $heading_for_student_border_number ?></th>
            <th><?php $heading_for_student_village_or_road_name ?></th>
            <th><?php $heading_for_student_post_office ?></th>
            <th><?php $heading_for_student_sub_district_name ?></th>
            <th><?php $heading_for_student_district_name ?></th>
        </tr>
        <tr>
            <td><?php $student_full_name ?></td>
            <td><?php $student_email ?></td>
            <td><?php $student_border_number?></td>
            <td><?php $student_village_or_road_name?></td>
            <td><?php $student_post_office?></td>
            <td><?php $student_sub_district_name?></td>
            <td><?php $student_district_name?></td>
        </tr>

    </table>

</body>
</html>





<?php
    /*
    $heading_for_student_full_name = "";
    $heading_for_student_email = "";
    $heading_for_student_border_number = "";
    $heading_for_student_village_or_road_name = "";
    $heading_for_student_post_office = "";
    $heading_for_student_sub_district_name = "";
    $heading_for_student_district_name = "";
    */

    $student_full_name = "";
    $student_email = "";
    $student_border_number = "";
    $student_village_or_road_name = "";
    $student_post_office = "";
    $student_sub_district_name = "";
    $student_district_name = "";


    $connection = mysqli_connect("localhost", "root", "", "bbsmrh");
    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $sql = "SELECT student_full_name, student_email, student_border_number FROM tbl_student_registration";

        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                $heading_for_student_full_name = $row["student_full_name"];
                $heading_for_student_email = "Email";
                $heading_for_student_border_number = "Border";
                $heading_for_student_village_or_road_name = "Villa";
                $heading_for_student_post_office = "Po";
                $heading_for_student_sub_district_name = "Sub";
                $heading_for_student_district_name = "Dis";

                echo "<tr><td>" . $row["student_full_name"]. "</td><td>" . $row["student_email"] . "</td><td>"
                    . $row["student_border_number"]. "</td></tr>";
            }
        }
        $connection->close();
    }

?>