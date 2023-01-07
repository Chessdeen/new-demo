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
          ADMIN LOGIN
        </h2>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-md-6 ">
             <form name="" action="includes/adlogin.php" class="" method="POST">
              <div class="contact_form-container">
                <div>
                  <div>
                    <label>
                      Admin Email
                      <input type="text" name="email" />
                    </label>
                  </div>
                  <div>
                    <label>
                      Admin Password
                      <input type="password" name="password" />
                    </label>
                  </div>
                  <div class="mt-5">
                    <button name="login" type="submit">
                      Login
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <!--<div class="contact_img-box">-->
            <!--  <img src="images/form-img.png" alt="">-->
            <!--</div>-->
          </div>
        </div>
      </div>
      
      <div class="container">

        <div class="row">
          <div class="col-md-6 ">
             <form name="" action="includes/adlogin.php" class="" method="POST">
              <div class="contact_form-container">
                <div>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->
 <?php include "includes/footer.php";?>