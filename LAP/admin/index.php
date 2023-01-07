<?php
include "includes/header.php";

?>

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
                            Control Centre <br>
                            <small> Lap Admin Email: <?php echo $_SESSION['email']; ?> </small>
                        </h1>
                        
                        <div class="col-xs-12">
                            <div>
                                <button style="font-weight:100;">
                            <a href="https://lapapplication.info/quiz/admin.php" style="font-weight:100; text-decoration:none;" target=”_blank”>Log On to the Aptitude Test Web App to Access Data</a>
                                </button>
                            </div>
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