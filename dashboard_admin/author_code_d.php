<?php
session_start();
  error_reporting(E_ALL);
ini_set('display_errors', 1);




$server_name = "localhost";
$db_username = "u625807408_arcadian";
$db_password = "Carpediem31";
$db_name = "u625807408_db_contact";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);


if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    


  
      
            $query = "INSERT INTO interview (I_author,I_name,I_email) VALUES ('$name','$username','$email')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Your Request will be reviewed";
                header('Location: author_d.php');
            }
            else 
            {
                $_SESSION['status'] = "Please submit the form again";
                header('Location: index.php');  
            }
    
    

}



 


            
                
?>