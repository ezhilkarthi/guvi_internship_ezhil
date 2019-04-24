<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select schema_name from information_schema.schemata where schema_name = 'guvi_db_ezhil'";
$result=$conn->query($sql);
if($result->num_rows>0){
    header('Location:main.html');
}
else{
$sql = "CREATE DATABASE guvi_db_ezhil";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
echo "<br>";
$con = new mysqli($servername, $username, $password, "guvi_db_ezhil");
 $sql="
CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `age` varchar(3) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
    $con->query($sql);
    $sql="ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);";
    $con->query($sql);
    $sql="ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;";
if ($con->query($sql) === TRUE) {
    echo "Table Register created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
echo "<br>";
echo "<br>";
$con->close();
header('Location: main.html');
}
$conn->close();
?>