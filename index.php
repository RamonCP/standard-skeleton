<?php
    $url = (isset($_GET['url'])) ? $_GET['url']:'home';
    $url = array_filter(explode('/',$url));
    
    $file = 'templates/'.$url[0].'.php';
    
    if(is_file($file)){
        include $file;
    }else{
        include 'templates/404.php';
    }			
?>