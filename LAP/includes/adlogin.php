<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<?php
if(isset($_POST['login'])) {
    
$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($connection, $email );
$password = mysqli_real_escape_string($connection, $password );


$query = "SELECT * FROM admin WHERE email = '{$email}' ";
$select_user_query = mysqli_query($connection, $query);
if(!$select_user_query) {
    die("QUERY FAILED". mysqli_error($connection));
}
while($row = mysqli_fetch_array($select_user_query)) {
       
        $db_id = $row['id'];
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_role = $row['role'];
   }
   
   
   if($email === $db_email && $password === $db_password){
       $_SESSION['id'] = $db_id;
        $_SESSION['email'] = $db_email;
        $_SESSION['password'] = $db_password;
        $_SESSION['role'] = $db_role;
       
       header("Location: ../admin/users.php");
        

        
        
    }   else {
        header("Location: ../index.php");
        
    }
}
?>


