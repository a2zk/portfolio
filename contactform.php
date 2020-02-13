<?php

include('include/config.php');

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) &&
  isset($_POST['message'])) {
    $db = get_PDO();
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    try {
      $query_string = "INSERT INTO contact(name, phone, email, message) values(:name, :phone, :email, :message);";
      $stmt = $db->prepare($query_string);

      # create the associative array between the variables in the
      # insert SQL statement with the actual values
      $params = array("name" => $name,
               "email" => $email,
               "phone" => $phone,
               "message" => $message);
      $stmt->execute($params);
      $success = array("success" => "Successfully inserted!");
      header("Content-type: application/json");
      print(json_encode($success));
    }
    catch(PDOException $ex) {
      die($ex);
    }
} else {
  header("HTTP/1.1 400 Invalid Request");
  header("Content-type: text/plain");
  die("I need a valid email, phone, message, and name.");
}


?>
