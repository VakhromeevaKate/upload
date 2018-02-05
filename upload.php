<?php

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/files/';
echo "Save into dir: ".$uploaddir;
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File was uploaded succesfully.\n";
} else {
    echo "Something is going wrong!\n";
}

echo "Some debugging info:\n";
print_r($_FILES);
print "</pre>";