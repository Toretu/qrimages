<?
include_once('./header.php');

if (isset($_GET["file"])){
 $filehash=$_GET["file"];
 echo "filehash  :" . $filehash . '<br>';
 $sql = "SELECT * FROM images WHERE imgHash = '" . $filehash . "';";
 echo "<br>SQL: ".$sql . '<br>';
 $result = sql($sql);
 //echo "<br> resultre:" . $result. '<br>';
 
 while ($row = $result->fetch_assoc()) {
    echo "<br>filename: " . $row["file_name"] . '<br>';
    echo "<br> Filname: " . $row["file_name"] ;
    echo '<img src="' . $row["file_name"] . '" />';
      #  "<br>content: " . $row["base64"] ;
 }
}
