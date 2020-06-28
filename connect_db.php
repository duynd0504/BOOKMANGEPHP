<?php
  $servername = "localhost";
  $username1 = "root";
  $password1 = "";
  $dbname = "db_book";
 
      // tạo connection
      $conn = new mysqli($servername, $username1, $password1, $dbname);
      // kiểm connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      // query students table
    $sql = "SELECT * FROM book";
    $result = $conn->query($sql);

    if(!$result) {
        die('Query error: [' . $db->error . ']');
    }

        //echo mysqli_num_rows($result); 
?>