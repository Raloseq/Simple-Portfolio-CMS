<?php

require 'Classes/Autoloader.php';

try{
    $db = new Database();
    $post = new Post($db);
    $user = new User;
    $settings = new Settings;
    $scss = new scssc;
}catch(Exception $e){
    echo $e->getMessage();
}


print_r($post->findOnePostData(51));