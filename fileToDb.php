<?
$target_file =  basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload fileimageFileType
} else {

    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data  = file_get_contents($_FILES['fileToUpload']['name']);
    $base64 = 'data:image/' . $imageFileType . ';base64,' . base64_encode($data);
    $filehash =  hash('tiger192,3', $target_file);
    $timestamp = date("Y-m-d H:i:s");
    $sql="INSERT INTO `qrfile`.`images` (`file_name`, `uploaded_on`, `base64`, `imgHash`) 
        VALUES ('". $target_file . "', '" . $timestamp . "' ,
         '". $base64 ."', '" . $filehash . "');";
    $result = sql($sql);
   
    
}