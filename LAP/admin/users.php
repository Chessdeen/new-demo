<?php ob_start(); ?>
<?php session_start(); ?>
<?php  include "../includes/db.php"; ?>


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
    <th>Id</th>
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
    <th>LASSRA Identification Card</th>
    <th>Enterprise of Interest</th>
    <th>Do you own/work in a farm?</th>
    <th>If Yes, State Location</th>
    <th>School Attended</th>
    <th>Valid School Certificate</th>
    <th>Certificate</th>
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
 <td>'.$row["id"].'</td> 
 <td>'.$row["name"].'</td> 
 <td>'.$row["adress"].'</td> 
 <td>'.$row["dob"].'</td> 
 
 
 </tr>
 ';
 }
 $export .= '</table>';
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename=info.xls');
 echo $export;
 }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAP ADMIN DASHBOARD</title>
    
     <!-- Favicon -->	
	<link rel="icon" type="image/png" href="../images/favicon.png" style="width:50px; height:50px; margn:10px; padding:10px;"/>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}


input[type=submit] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
<?php
include "includes/navigation.php";

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        
                        <h1 class="page-header">
                            Applicant's Data
                        </h1>
                        
                       
                        <form method="post" action="includes/applicants.php">
                        <input type="submit" name="submit" value="Export Data" />
                        </form>
                       
                        <div class="col-xs-12">
                            
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
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
                                    <th>LASSRA Identification Card</th>
                                    <th>Enterprise of Interest</th>
                                    <th>Do you own/work in a farm?</th>
                                    <th>If Yes, State Location</th>
                                    <th>School Attended</th>
                                    <th>Valid School Certificate</th>
                                    <th>Certificate</th>
                                    <th>Names of Next of Kin</th>
                                    <th>Relationship with Next of Kin</th>
                                    <th>Home Address of Next of Kin</th>
                                    <th>Phone Number of Next of Kin</th>
                                    <th>Names of First Guarantor</th>
                                    <th>First Guarantor's Address</th>
                                    <th>Relationship with First Guarantor</th>
                                    <th>First Guarantor's Phone Number</th>
                                    <th>Name of Second Guarantor</th>
                                    <th>Second Guarantor's Address</th>
                                    <th>Relationship with Second Guarantor</th>
                                    <th>Second Guarantor's Phone Number</th>
                                    <th>Reason for having interest in the training.</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                
                                
                                <?php //FIND ALL USERS

                                
        $query = "SELECT * FROM users";
        $select_admin = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($select_admin)) {


            $id = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $lga = $row['lga'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $mstatus = $row['mstatus'];
            $origin = $row['origin'];
            $number = $row['number'];
            $email = $row['email'];
            $lassra = $row['lassra'];
            $lassra_card = $row['lassra_card'];
            $enterprise = $row['enterprise'];
            $farm = $row['farm'];
            $farm_loc = $row['farm_loc'];
            $school = $row['school'];
            $school_cert = $row['school_cert'];
            $cert = $row['cert'];
            $kin = $row['kin'];
            $kin_rel = $row['kin_rel'];
            $kin_add = $row['kin_add'];
            $kin_num = $row['kin_num'];
            $guarant = $row['guarant'];
            $guarant_add = $row['guarant_add'];
            $guarant_rel = $row['guarant_rel'];
            $guarant_num = $row['guarant_num'];
            $guarant1 = $row['guarant1'];
            $guarant1_add = $row['guarant1_add'];
            $guarant1_rel = $row['guarant1_rel'];
            $guarant1_num = $row['guarant1_num'];
            $interest = $row['interest'];
        
        echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$address}</td>";
            echo "<td>{$lga}</td>";
            echo "<td>{$dob}</td>";
            echo "<td>{$gender}</td>";
            echo "<td>{$mstatus}</td>";
            echo "<td>{$origin}</td>";
            echo "<td>{$number}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$lassra}</td>";
            
            echo "<td><img width='100' src='../lap/image/$lassra_card' alt='lassra image'></td>";
            echo "<td>{$enterprise}</td>";
            echo "<td>{$farm}</td>";
            echo "<td>{$farm_loc}</td>";
            echo "<td>{$school}</td>";
            echo "<td>{$school_cert}</td>";
            
            echo "<td><img width='100' src='../lap/image/$cert' alt='certificate image'></td>";
            
            echo "<td>{$kin}</td>";
            echo "<td>{$kin_rel}</td>";
            echo "<td>{$kin_add}</td>";
            echo "<td>{$kin_num}</td>";
            echo "<td>{$guarant}</td>";
            echo "<td>{$guarant_add}</td>";
            echo "<td>{$guarant_rel}</td>";
            echo "<td>{$guarant_num}</td>";
            echo "<td>{$guarant1}</td>";
            echo "<td>{$guarant1_add}</td>";
            echo "<td>{$guarant1_rel}</td>";
            echo "<td>{$guarant1_num}</td>";
            echo "<td>{$interest}</td>";
        
        echo "</tr>";
    }

?>
                                
                            
                           </tbody> 
                        </table>
                            
                        </div>         
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
        
        
        
        <!-- /#page-wrapper -->

<?php
include "includes/footer.php";

?>