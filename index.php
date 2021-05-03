<?
include_once('./header.php');


echo "Choose a file to upload";

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="but_upload">
</form>


<?
//list files:

$files = sql("SELECT  * FROM `qrfile`.`images`;");
?>
<table>
    <tr>
        <th>fileindex</th>
        <th>filename</th>
        <th>fileHash</th>
        <th>Download Link</th>
    </tr>
    <?
    while ($row = $files->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["file_name"] . "</td>
        <td>" . $row["imgHash"] . '</td>
        <td><a href="/qrfile.php?file='. $row["imgHash"] . '">dl link</a></td>
        </tr>';
    }
    echo "</table>";


    include_once('./footer.php');
