    
 <?php error_reporting(0);?>
    <?php include('db.php')?>

    <?php session_start()?>

      <?php
    
       if(isset($_POST['login'])){
          $username=$_POST['username'];
          $password=$_POST['password'];
                       
           $sql = "SELECT * FROM `login` WHERE `username`='{$username}' and `password`='{$password}'";
              $result1=mysqli_query($connection,$sql);
                 while($row=mysqli_fetch_assoc($result1)){
                     $db_username=$row['username'];
                       $db_password=$row['password'];
                        $db_role=$row['role'];
                       } 
                       if( $username==$db_username && $password== $db_password){
                           header("location:admin/index.php");
                           $_SESSION['username']=$db_username;
                           $_SESSION['password']=$db_password;
                           $_SESSION['role']=$db_role;
                       }else{
                           echo "<script>alert('incorrect username or password')</script>";
                          
                       }
      
                         
                       }
                      
                     
               
               ?>

