<?php

if($_POST){

    $fileName = 'newsletter.txt'; 
    $error = false;
    
    $email = $_POST['email'];
    
    if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
        $error = true;
    
    
   
    if($error == false){
        $file = fopen($fileName, a);
        fwrite($file, "$email,");
        fclose($file);
        echo "OK" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> SUBSCRIBE SUCESSFULL


