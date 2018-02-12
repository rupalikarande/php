<?php


$name_a="";
$commitee_name="";

  $name_a=$_POST['name'];
  $commitee_name=$_POST['commitee_name'];
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
  
  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO table1 (name,commitee_name) VALUES (?, ?)");
  $stmt->bind_param("ss", $name_a, $commitee_name);
  
  // set parameters and execute
  
  $stmt->execute();
  
  
  
  echo "New records created successfully";
  
  $stmt->close();
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