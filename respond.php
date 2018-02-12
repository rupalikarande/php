<?php

$myObj=array();

$name_a="";
$commitee_name="";

 // $name_a=$_POST['name'];
 // $commitee_name=$_POST['commitee_name'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "commitee";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> name: ". $row["name"]. " " . $row["commitee_name"] . "<br>";
        $singlerow=array('name' => $row["name"],
       'commitee_name' =>  $row["commitee_name"]);
       array_push($myObj,$singlerow);
    }
    $myJSON = json_encode($myObj);
    echo $myJSON;
} else {
    echo "0 results";
}
  
  
  
  echo "acknowledge";
  
 
  $conn->close();
  ?>
  

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>response</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
            <script src="main.js"></script>
        </head>
        <body>
         succefully entered
        <?php echo $name_a;
?>
        </body>
        </html>