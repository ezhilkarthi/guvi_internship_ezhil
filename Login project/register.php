<?php
//session_start();


//$name = "ezhil";
     $conn = mysqli_connect('localhost','root','','guvi_db_ezhil');    

    $name = $_POST['name'];
    
     $email = $_POST['email'];
//$email = "ehuil@gmail.com";
     $password = $_POST['password'];
//$password = "123456";
     $date = $_POST['date'];
//$date = date("j,n,y");
     $age = $_POST['age'];
//$age = 19;
     $contact = $_POST['contact'];
//$contact = 9876543210;

     $sql = $conn -> prepare("INSERT INTO user (name,email,password,date,age,contact) VALUES (?, ?, ?, ?, ?, ?)");
     $sql -> bind_param("ssssis",$name,$email,$password,$date,$age,$contact);
    if($sql -> execute()){
        echo '
        <script>
            alert("Successfully Created");<?script>
           ';
           
     }
    if(file_exists('Register_data.json')){
        $current_data = file_get_contents('Register_data.json');
        $array_data = json_decode($current_data,true);
        $extra = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'date'=> $date,
            'age' => $age,
            'contact' => $contact
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data);
        if(file_put_contents('Register_data.json',$final_data)){
            
        }
    }else{
        
    }
 echo '<script>
             window.location="main.html";</script>'
    
     
   
?>