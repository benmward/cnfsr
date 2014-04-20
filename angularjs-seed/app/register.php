<?php

$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];

$emaillist = explode(",",file_get_contents("txt/emails.txt"));
$userlist = explode(",",file_get_contents("txt/usernames.txt"));
$passlist = explode(",",file_get_contents("txt/passwords.txt"));

if(!in_array($email,$emaillist) && !in_array($user,$userlist)){
    
    if(file_get_contents("txt/emails.txt") == ""){
        
        echo "first";
        
        file_put_contents("txt/emails.txt", $email, FILE_APPEND | LOCK_EX);
        file_put_contents("txt/usernames.txt", $user, FILE_APPEND | LOCK_EX);
        file_put_contents("txt/passwords.txt", $pass, FILE_APPEND | LOCK_EX);
        
        echo "done";
        
    }else{
        
        echo "sec";
        
        file_put_contents("txt/emails.txt", ",".$email, FILE_APPEND | LOCK_EX);
        file_put_contents("txt/usernames.txt", ",".$user, FILE_APPEND | LOCK_EX);
        file_put_contents("txt/passwords.txt", ",".$pass, FILE_APPEND | LOCK_EX);
    }
    
}else{
    echo "Already exists";
}

?>