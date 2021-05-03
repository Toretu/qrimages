<?
include_once('./header.php');

if (isset($_GET["file"])){
 $filehash=$_GET["file"];
 echo "filehhsh :" . $filehash;
 $sql = "SELECT * FROM images WHERE imgHash = '".$filehash . "';<br>";
 echo "SQL".$sql;
 $result = sql($sql);
 echo "<br> resultre:" . $result. '<br>';
 echo "<br>filename: " .$result["filename"];
 while ($row = $result->fetch_assoc()) {
    echo "<br> Filname: " . $row["filename"] . 
        "<br>content: " . $row["base64"] ;
 }
}
echo ""; 