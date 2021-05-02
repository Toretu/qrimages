<?
//require 'config.php';
function connectToSQL(){
    $conn = new mysqli(constant('servername'), constant('username'), constant('password'), constant('dbname'));
    // Check connection
    echo constant('servername') . ' ' . constant('username') . ' ' . constant('password') . ' ' . constant('dbname');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


//Execute a sql sting query and return  the reult as an obj
function sql($sql){
  $conn=connectToSQL();
  echo "<br>SQL: " . $sql . "<br>";
  return $conn->query($sql);
}