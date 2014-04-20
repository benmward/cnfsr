<?php

if(file_get_contents("txt/feed.txt") == ""){

    file_put_contents("txt/feed.txt", $_POST['conf'], FILE_APPEND | LOCK_EX);
    
}else{
    
    file_put_contents("txt/feed.txt", ",".$_POST['conf'], FILE_APPEND | LOCK_EX);
    
}

header("Location: confessions.php");

?>