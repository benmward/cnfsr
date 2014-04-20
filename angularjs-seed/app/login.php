<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$userlist = explode(",",file_get_contents("txt/usernames.txt"));
$passlist = explode(",",file_get_contents("txt/passwords.txt"));

$key1 = array_search($user, $userlist);

/*

header("Location: ....");

$_SESSION['NAME'] = $..;

*/

if($key !== false){
    if($passlist[$key1] == $pass){
        echo "Successful login";
        
        $_SESSION['username'] = $user;
        $_SESSION['email'] = $email;
        
        header("Location: uni_select.php");
        
    }else{
        echo "Incorrect login";
    }
}else{
    echo "Incorrect login";
}

?>