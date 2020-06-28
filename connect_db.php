<?php
      // tạo connection
      $conn = new mysqli("localhost", "root", "", "db_book");
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