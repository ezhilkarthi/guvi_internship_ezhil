<?php


//$name = "ezhil";
     $conn = mysqli_connect('localhost','root','','guvi_db_ezhil');    

     $email = $_POST['email'];
//$email = "ehuil@gmail.com";
     $password = $_POST['password'];
//$password = "123456";
    $sql = "select email,password,id from user where email='$email'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $ps=$row['password'];
            if($ps==$password){
                session_start();
                $_SESSION['id']=$row['id'];
                echo '
                    <script>
                        window.location="profile.php";
                    </script>';
            }
             else{
        echo '
                    <script>
                        alert("Invalid Logged in...")</script>';
    }
        }
    }
   
    
?>