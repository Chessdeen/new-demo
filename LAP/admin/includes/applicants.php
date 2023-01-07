<?php
$connect = mysqli_connect("localhost", "lapaoakw_lapaoakw", "Azby1010(.)", "lapaoakw_lap");
if(isset($_POST["submit"]))
{
 $query = "SELECT * FROM users";
 $res = mysqli_query($connect, $query);
 if(mysqli_num_rows($res) > 0)
 {
 $export .= '
 <table> 
 <tr> 
    <th>Full Name</th>
    <th>Residential Address</th>
    <th>L.G.A.</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Marital Status</th>
    <th>State of Origin</th>
    <th>Telephone Number</th>
    <th>Email</th>
    <th>LASSRA Number</th>
    <th>Enterprise of Interest</th>
    <th>School Attended</th>
    <th>School Certificate</th>
    <th>Names of Next of Kin</th>
    <th>Relationship with Next of Kin</th>
    <th>Home Address of Next of Kin</th>
    <th>Phone Number of Next of Kin</th>
    <th>Names of First Guarantor</th>
    <th>First Guarantor Address</th>
    <th>Relationship with First Guarantor</th>
    <th>First Guarantor Phone Number</th>
    <th>Name of Second Guarantor</th>
    <th>Second Guarantor Address</th>
    <th>Relationship with Second Guarantor</th>
    <th>Second Guarantor Phone Number</th>
    <th>Reason for having interest in the training.</th>
 
 </tr>
 ';
 while($row = mysqli_fetch_array($res))
 {
 $export .= '
 <tr> 
 <td>'.$row["name"].'</td> 
 <td>'.$row["address"].'</td> 
 <td>'.$row["lga"].'</td>
 <td>'.$row["dob"].'</td>
 <td>'.$row["gender"].'</td> 
 <td>'.$row["mstatus"].'</td> 
 <td>'.$row["origin"].'</td> 
 <td>'.$row["number"].'</td>
 <td>'.$row["email"].'</td>
 <td>'.$row["lassra"].'</td> 
 <td>'.$row["enterprise"].'</td> 
 <td>'.$row["school"].'</td>
 <td>'.$row["school_cert"].'</td>
 <td>'.$row["kin"].'</td> 
 <td>'.$row["kin_rel"].'</td> 
 <td>'.$row["kin_add"].'</td> 
 <td>'.$row["kin_num"].'</td>
 <td>'.$row["guarant"].'</td>
 <td>'.$row["guarant_add"].'</td> 
 <td>'.$row["guarant_rel"].'</td> 
 <td>'.$row["guarant_num"].'</td>
 <td>'.$row["guarant1"].'</td>
 <td>'.$row["guarant1_add"].'</td> 
 <td>'.$row["guarant1_rel"].'</td> 
 <td>'.$row["guarant1_num"].'</td> 
 <td>'.$row["interest"].'</td>
 
 
 </tr>
 ';
 }
 $export .= '</table>';
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename=applicants.xls');
 echo $export;
 }
}

?>