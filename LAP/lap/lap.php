<!DOCTYPE html>
<html lang="en">
<head>
	</head>
	<?php include('header.php') ?>
	<?php include('auth.php') ?>
	<?php include('db_connect.php') ?>
	<title>Student List</title>
</head>
<body>
	<?php include('nav_bar.php') ?>
	
	<div class="container-fluid admin">
	   
		<div class="col-md-12 alert alert-primary">Lap Applicants List</div>
		<br>
		<br>
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered" id='table'>
					<colgroup>
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						
					</colgroup>
					<colgroup>
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						<col width="5%">
						
					</colgroup>
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Username</th>
							<th>Address</th>
							<th>LGA</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Marital</th>
							<th>State</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>LASRRA No</th>
							<th>Enterprise</th>
							<th>Farm History</th>
							<th>Farm Location</th>
							<th>School</th>
							<th>Degree</th>
							<th>Next of Kin</th>
							<th>Kin Relationship</th>
							<th>Kin Address</th>
							<th>Kin Number</th>
							<th>1st Guarantor</th>
							<th>1st Guarantor Address</th>
							<th>1st Guarantor Relationship</th>
							<th>1st Guarantor No</th>
							<th>2nd Guarantor</th>
							<th>2nd Guarantor Address</th>
							<th>2nd Guarantor Relationship</th>
							<th>2nd Guarantor No</th>
							<th>Interest</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$qry = $conn->query("SELECT * from users ");
					$i = 1;
					if($qry->num_rows > 0){
						while($row= $qry->fetch_assoc()){
						?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['username'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['lga'] ?></td>
						<td><?php echo $row['dob'] ?></td>
						<td><?php echo $row['gender'] ?></td>
						<td><?php echo $row['mstatus'] ?></td>
						<td><?php echo $row['origin'] ?></td>
						<td><?php echo $row['number'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['lassra'] ?></td>
						
						<td><?php echo $row['enterprise'] ?></td>
						<td><?php echo $row['farm'] ?></td>
						<td><?php echo $row['farm_loc'] ?></td>
						<td><?php echo $row['school'] ?></td>
						<td><?php echo $row['school_cert'] ?></td>
					
						<td><?php echo $row['kin'] ?></td>
						<td><?php echo $row['kin_rel'] ?></td>
						<td><?php echo $row['kin_add'] ?></td>
						<td><?php echo $row['kin_num'] ?></td>
						<td><?php echo $row['guarant'] ?></td>
						<td><?php echo $row['guarant_add'] ?></td>
						<td><?php echo $row['guarant_rel'] ?></td>
						<td><?php echo $row['guarant_num'] ?></td>
						<td><?php echo $row['guarant1'] ?></td>
						<td><?php echo $row['guarant1_add'] ?></td>
						<td><?php echo $row['guarant1_rel'] ?></td>
						<td><?php echo $row['guarant1_num'] ?></td>
						<td><?php echo $row['interest'] ?></td>
						
					</tr>
					<?php
					}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--<div class="modal fade" id="manage_student" tabindex="-1" role="dialog" >-->
	<!--			<div class="modal-dialog modal-centered" role="document">-->
	<!--				<div class="modal-content">-->
	<!--					<div class="modal-header">-->
							
	<!--						<h4 class="modal-title" id="myModallabel">Add New student</h4>-->
	<!--						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
	<!--					</div>-->
	<!--					<form id='student-frm'>-->
	<!--						<div class ="modal-body">-->
	<!--							<div id="msg"></div>-->
	<!--							<div class="form-group">-->
	<!--								<label>Name</label>-->
	<!--								<input type="hidden" name="id" />-->
	<!--								<input type="hidden" name="uid" />-->
	<!--								<input type="hidden" name="user_type" value = '3' />-->
	<!--								<input type="text" name="name" required="required" class="form-control" />-->
	<!--							</div>-->
	<!--							<div class="form-group">-->
	<!--								<label>Level-Section</label>-->
	<!--								<input type="text" name ="level_section" required="" class="form-control" />-->
	<!--							</div>-->
	<!--							<div class="form-group">-->
	<!--								<label>Username</label>-->
	<!--								<input type="text" name ="username" required="" class="form-control" />-->
	<!--							</div>-->
	<!--							<div class="form-group">-->
	<!--								<label>Password</label>-->
	<!--								<input type="password" name="password" required="required" class="form-control" />-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="modal-footer">-->
	<!--							<button  class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>-->
	<!--						</div>-->
	<!--					</form>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	
</body>

</html>