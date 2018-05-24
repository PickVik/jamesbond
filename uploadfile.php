<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- REFERENCE TO STYLE SHEET-->
        <link rel="stylesheet" type="text/css" href="files.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <title>Upload files</title>
        
    <body>
        
        <h1>Welcome to upload files!</h1><br>
        
        <h2>Please upload your files... </h2> <br>    
        
    
        <form action="UploadPage.php"
              method="post"
            enctype="multipart/form-data">
            
            <input type="hidden"
                   name="MAX_FILE_SIZE"
                   value="10000000"/>
            
            <input type="file"name="myfile"/>
            <input type="submit" value="send"/>
            
           
        </form>
        
    
</html>

<?php
        // put your code here
        const InputKey = 'myfile';
        const AllowedTypes = ['text/xml'];

if(!empty($_FILES[InputKey])){
    //die("File Missing")."<br>";
    

 if($_FILES[InputKey]['error']>0){
    die("Handle the error!")."<br>";
    
 }
   
if(!in_array($_FILES[InputKey]['type'], AllowedTypes)) { // why are we only checking in array in order to find out whether the uploaded file id allowedtype?
    die("Handle File Type Not Allowed ")."<br>";
    
}

$tmpFile= $_FILES[InputKey]['tmp_name'];

$dstFile = 'Uploads/'.$_FILES[InputKey]['name'];// what dst to give if we want to save files on our computer? Ans: we have to change setting in ini file
//print_r($_FILES);

if (!move_uploaded_file($tmpFile,$dstFile)){
    die ("Handle Error")."<br>";
}
        if (file_exists($tmpFile)){
            
            echo 'File successfully uploaded';
        }
}
        //unlink($tmp);
            //echo "<a href='website.html'>Login</a><br>";
        
                



?>








