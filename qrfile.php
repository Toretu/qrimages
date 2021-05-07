<?
include_once('./header.php');

echo '<p><a href="/">himatte</a></p>';
if (isset($_GET["file"])){
 $filehash=$_GET["file"];
 echo "filehash  :" . $filehash . '<br>';
 $sql = "SELECT * FROM images WHERE imgHash = '" . $filehash . "';";
 echo "<br>SQL: ".$sql . '<br>';
 echo "<br>Request url".$_SERVER['REQUEST_URI'] .'<br>';
 $result = sql($sql);
 //echo "<br> resultre:" . $result. '<br>';
 
 while ($row = $result->fetch_assoc()) {
    echo "<br>filename: " . $row["file_name"] . '<br>';
  //  echo "<br> Filname: " . $row["file_name"] ;
    echo '<img src="' . $row["file_name"] . '" />';
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $domain = "$_SERVER[HTTP_HOST]";
    echo '<br>Request uri: '. $actual_link. '<br>domene: '. $domain;
    //  https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8
    echo '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$actual_link.'%2F&choe=UTF-8" title="Link to Google.com" />';
 }
}
