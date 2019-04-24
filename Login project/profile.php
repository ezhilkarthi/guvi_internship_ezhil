<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  	.table{
  	width : 50%;
    
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img class="navbar-brand" src="https://s3-ap-southeast-1.amazonaws.com/internshala-uploads/google_logo/guvi_581871.png" alt="logo" >
    </div>
   
    <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <center>
<table class="table">
 <?php
    session_start();
    $id=$_SESSION['id'];
     $conn = mysqli_connect('localhost','root','','guvi_db_ezhil');   
    $sql="select * from user where id= $id";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
  echo '<tbody>
    <tr>
      <th>Name</th>
      <td>'.$row["name"].'</td>
    </tr>
    <tr>
      <th>Email Id</th>
      <td>'.$row["email"].'</td>
    </tr>
    <tr>
      <th>password</th>
      <td>'.$row["password"].'</td>
    </tr>
    <tr>
      <th>Date</th>
      <td>'.$row["date"].'</td>
    </tr>
    <tr>
      <th>Age</th>
      <td>'.$row["age"].'</td>
    </tr>
    <tr>
      <th>Contact</th>
      <td>'.$row["contact"].'</td>
    </tr>
    
  </tbody>';
        }
    }
    $conn->close();
      ?>
</table>
</center>
</div>

</body>
</html>
