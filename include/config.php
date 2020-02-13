<?php

/**
 * Returns a PDO object connected to the database. If a PDOException is thrown when
 * attempting to connect to the database, responds with a 503 Service Unavailable
 * error.
 * @return {PDO} connected to the database upon a succesful connection.
 */
function get_PDO() {
  # Variables for connections to the database.
  # TODO: Replace with your server (e.g. MAMP) variables as shown in lecture on Friday.
  $host = "127.0.0.1";     # fill in with server name (e.g. localhost) 127.0.0.1
  $port = "3306";      # fill in with a port if necessary (will be different mac/pc)
  $user = "aidaaejf_koenig";     # fill in with user name
  $password = "Shadowninja1"; # fill in with password (will be different mac/pc)
  $dbname = "aidaaejf_portfoliodb";   # fill in with db name containing your SQL tables

  # Make a data source string that will be used in creating the PDO object
  $ds = "mysql:host={$host};dbname={$dbname};charset=utf8";

  try {
    $db = new PDO($ds, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  } catch (PDOException $ex) {
    header("HTTP/1.1 503 Service Unavailable");
    header("Content-type: text/plain");
    echo($ex);
    die("We are experiencing trouble accessing the database. Please try again later.");
    # TODO: You must handle a DB error (503 Service Unavailable) if an error occurs.
  }
}

// $con = mysqli_connect('localhost:3306', 'aidaaefj_koenig', 'shadowninja', 'aidaaefj_portfolioContact');

// mysqli_select_db($con, 'aidaaefj_portfolioContact');

// if(!$con){
//     die("Connection Error: ".mysqli_connect_error());
// }

?>
