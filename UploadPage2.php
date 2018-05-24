<?php


// THIS IS FOR XML AND JPEG UPLOAD


const InputKey2 = 'myfile';

const AllowedTypes2 = ['text/plain', 'image/jpeg'];

if (empty($_FILES[InputKey2])) {
    die("File Missing!");
    
}

if ($_FILES[InputKey2]['error'] > 0) {
    die("handle the error!");
}

if (!in_array($_FILES[InputKey2]['type'], AllowedTypes2)) {
    die("Handle File Type Not Allowed");
    
}

$tmpFile2 = $_FILES[InputKey2]['tmp_name'];

$dstFile2 = 'uploads/'.$_FILES[InputKey2]['name'];

if (!move_uploaded_file($tmpFile2, $dstFile2)) {
    die("Handle Error");
}

if (file_exists($dstFile2)) {
    echo "Success";
   echo "<a href='Website.html'>Logout</a><br>";
   
}

