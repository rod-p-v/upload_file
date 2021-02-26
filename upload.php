<?php

$dir="uploads/";

$file= $dir.basename($_FILES["file"]["name"]);

$fileType=strtolower(pathinfo($file,PATHINFO_EXTENSION));

$sizeCheck=getimagesize($_FILES["file"]["tmp_name"]);


if ($sizeCheck != false) {
    $size = $_FILES["file"]["size"];

    if ($size > 500000) {
        echo "The file should not be more than 500kb";
    }else {
        //Validate the type of the file
        if ($fileType == "jpg" || $fileType == "jpeg") {
            // the file was correctly validated
            
            if (move_uploaded_file($_FILES["file"]["tmp_name"],$file)) {
                echo "The file was correctly uploaded";
            }else {
                echo "The file was not upload";
            }
        }else {
            echo "The file could just be jpg/jpeg";
        }
    }
}else {
    echo "wrong";
}

?>