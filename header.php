<?
$path = $_SERVER['DOCUMENT_ROOT'];
 $path .= "./config.php";
 include_once($path);
include_once('./functions.php');
 ?>
 <html>
 <header>
<? 
echo constant('SiteName');
?>
 </header>
<body>