
<?php
if(isset($_POST['submit'])) {
     $name = $_POST['name'];
     $username = $_POST['username'];
     $password =$_POST['password'];
     $address = $_POST['address'];
     $lga = $_POST['lga'];
     $dob = $_POST['dob'];  
     $gender = $_POST['gender'];
     $mstatus = $_POST['mstatus'];
     $origin = $_POST['origin'];
     $number = $_POST['number'];
     $email = $_POST['email'];
     $lassra = $_POST['lassra'];
     
     
     $lassra_card = $_FILES['lassra_card']['name'];
     $lassra_card_temp = $_FILES['lassra_card']['tmp_name'];
     
     
     $enterprise = $_POST['enterprise'];
     $farm = $_POST['farm'];
     $farm_loc = $_POST['farm_loc'];
     $school = $_POST['school'];
     $school_cert = $_POST['school_cert'];
     
     $cert = $_FILES['cert']['name'];
     $cert_temp = $_FILES['cert']['tmp_name'];
     
     $kin = $_POST['kin'];
     $kin_rel = $_POST['kin_rel'];
     $kin_add = $_POST['kin_add'];
     $kin_num = $_POST['kin_num'];
     $guarant = $_POST['guarant'];
     $guarant_add = $_POST['guarant_add'];
     $guarant_rel = $_POST['guarant_rel'];
     $guarant_num = $_POST['guarant_num'];
     $guarant1 = $_POST['guarant1'];
     $guarant1_add = $_POST['guarant1_add'];
     $guarant1_rel = $_POST['guarant1_rel'];
     $guarant1_num = $_POST['guarant1_num'];
     $interest = $_POST['interest'];
     
            move_uploaded_file($lassra_card_temp, "lap/image/$lassra_card" );
            move_uploaded_file($cert_temp, "lap/image/$cert" );
            
           
    $connection = mysqli_connect('localhost', 'lapaoakw_lapaoakw', 'Azby1010(.)', 'lapaoakw_lap');
    if($connection) {
         header("Location: welcome.php");
    } else {
        die("Database connection failed");
    }
    
    $query = "INSERT INTO users(name,user_type,username,password,address,lga,dob,gender,mstatus,origin,number,email,lassra,lassra_card,enterprise,farm,farm_loc,school,school_cert,cert,kin,kin_rel,kin_add,kin_num,guarant,guarant_add,guarant_rel,guarant_num,guarant1,guarant1_add,guarant1_rel,guarant1_num,interest) ";
    $query .= "VALUES ('$name', 3, '$username', '$password', '$address', '$lga', '$dob', '$gender', '$mstatus', '$origin', '$number', '$email', '$lassra', '$lassra_card', '$enterprise', '$farm', '$farm_loc', '$school', '$school_cert', '$cert', '$kin', '$kin_rel', '$kin_add', '$kin_num', '$guarant', '$guarant_add', '$guarant_rel', '$guarant_num', '$guarant1', '$guarant1_add', '$guarant1_rel', '$guarant1_num', '$interest')";
    
   $result = mysqli_query($connection, $query);
    
    if(!$result) {
        
        die('Query FAILED' . mysqli_error());
        
    }
    
}

?>
<?php include "includes/header.php";?>
    
    
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <?php include "includes/nav.php";?>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <?php include "includes/slider.php";?>

    <!-- end slider section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="">
        Personal Bio-Data
      </h2>
        <small>Instructions: <br>
i. Please note that all input fields must be filled in as not doing so will render the application incomplete. <br>
ii. You are expected to fill in correct details only, as you could miss updates if details are wrong. <br>
iii. You are instructed to take pictures of your credentials, your means of identification (LASRRA Card), Guarantor's passport picture.</small>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-12 ">
           <form action="application.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="contact_form-container">
              <div>
                <div class="col-md-8">
                  <label>
                    Full Name (Surname First)
                    <input type="text" name="name" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Username
                    <input type="text" name="username" autocomplete="off" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Password
                    <input type="password" name="password" autocomplete="off"required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Residential Address
                    <input type="text" name="address" required/>
                  </label>
                </div>
                 <div class="col-md-8">
                  <label>
                    L.G.A.
                    <input type="text" name="lga" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Date of Birth
                    <input type="date" name="dob" required/>
                  </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label>
                    Gender
                    <select class="" name="gender" id="" required>
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
                    </select>
                    </label>
                  
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <label>
                    Marital Status
                    <select class="" name="mstatus" id="" required>
                    <option value=""></option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                    </select>
                    </label>
                </div>
                
                <div class="col-md-8">
                  <label>
                    State of Origin
                    <input type="text" name="origin" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Telephone Number
                    <input type="text" name="number" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Email Address
                    <input type="email" name="email" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    LASRRA Number
                    <input type="text" name="lassra" />
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    LASRRA Identification Card
                    <input class="form-control" type="file" name="lassra_card" value="" />
                  </label>
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <label>
                    Enterprise of Interest
                    <select class="" name="enterprise" id="" required>
                    <option value=""></option>
                    <option value="aquaculture">Aquaculture</option>
                    <option value="poultry & piggery">Poultry & Piggery</option>
                    </select>
                    </label>
                </div>
                
                
                <div class="col-md-6 col-sm-6">
                    <label>
                    Do you own/work in a farm?
                    <select class="" name="farm" id="" required>
                    <option value=""></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    </select>
                    </label>
                </div>
                
                <div class="col-md-8">
                  <label>
                    If Yes, State Location
                    <input type="text" name="farm_loc" />
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Educational Background (List all. Most currrent first)
                    <textarea name="school" id="" cols="30" rows="10" required></textarea>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Highest Qualification (Year Obtained)
                    <textarea name="school_cert" id="" cols="30" rows="10" required></textarea>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Upload School Certificate (Most Current Only)
                    <input class="form-control" type="file" name="cert" value="" required/>
                  </label>
                </div>
                <div class="container">
                    <h3 class="">
                    Next of Kin Data
                    </h3>
                </div>
                   <div class="col-md-8">
                  <label>
                    Name of Next of Kin
                    <input type="text" name="kin" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Relationship with Next of Kin
                    <input type="text" name="kin_rel" required/>
                  </label>
                </div>
                 <div class="col-md-8">
                  <label>
                    Residential Address of Next of Kin
                    <input type="text" name="kin_add" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Phone Number of Next of Kin
                    <input type="text" name="kin_num" required/>
                  </label>
                </div>
                <div class="container">
                    <h3 class="">
                    Guarantor's Details
                    </h3>
                    <small>Note: You are expected to provide details of two different guarantors </small>
                    <br> <h4>First Guarantor</h4>
                </div>
                <div class="col-md-8">
                  <label>
                    Name of First Guarantor
                    <input type="text" name="guarant" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    First Guarantor's Address
                    <input type="text" name="guarant_add" required/>
                  </label>
                </div>
                 <div class="col-md-8">
                  <label>
                    Relationship with First Guarantor
                    <input type="text" name="guarant_rel" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label >
                    First Guarantor's Phone Number
                    <input type="text" name="guarant_num" required/>
                  </label>
                </div>
                <div class="container">
                   <h4>Second Guarantor</h4>
                </div>
                
                
                <div class="col-md-8">
                  <label>
                    Name of Second Guarantor
                    <input type="text" name="guarant1" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Second Guarantor's Address
                    <input type="text" name="guarant1_add" required/>
                  </label>
                </div>
                 <div class="col-md-8">
                  <label>
                    Relationship with Second Guarantor
                    <input type="text" name="guarant1_rel" required/>
                  </label>
                </div>
                <div class="col-md-8">
                  <label>
                    Second Guarantor's Phone Number
                    <input type="text" name="guarant1_num" required/>
                  </label>
                </div>
                
                
                
                <div class="col-md-8">
                  <label>
                    State your reason for having interest in LAGOS AGRIPRENEURSHIP PROGRAMME.
                    <textarea name="interest" id="" cols="30" rows="10" required></textarea>
                  </label>
                </div>
                <div class="mt-5">
                  <button type="submit" name="submit">
                    Submit Application
                  </button>
                </div>
                  
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

   <?php include "includes/footer.php";?>
   
   