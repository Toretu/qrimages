<?
include_once('./header.php');

echo '<p><a href="/">himatte</a></p>';
if (isset($_GET["file"])) {
    $filehash = $_GET["file"];
    $sql = "SELECT * FROM images WHERE imgHash = '" . $filehash . "';";
    echo "filehash  :" . $filehash . '<br>';
    echo "<br>SQL: " . $sql . '<br>';
    echo "<br>Request url" . $_SERVER['REQUEST_URI'] . '<br>';
    $result = sql($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<br>filename: " . $row["file_name"] . '<br>';
        echo '<img src="' . $row["file_name"] . '" width="500" height="auto" alt="' . $row["imgName"] . '" />';
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $domain = "$_SERVER[HTTP_HOST]";
        echo '<br>Link: ' . $actual_link . '<br>domene: ' . $domain;
        //  https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8
        echo '<a href="' . $actual_link . '"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $actual_link . '%2F&choe=UTF-8" title="' . $actual_link . '" /><a/>';
    }
}
