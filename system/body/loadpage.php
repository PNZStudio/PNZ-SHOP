<?php

$pages = array(
    "home",
    "product",
    "watch",
    "pc",
    "smartphone",
    "labtop",
    "view",
    "profile",
    "cart",
    "auth",
    "logout",
    "backend"
);

if(isset($_GET['page'])){
    $status = 0;
    foreach($pages as $value){
        if($value == $_GET['page']){
            $status = 1;
        }
    }
    if($status == 1){
        include "system/page/".$_GET['page'].".php";
    }else{
        include "system/page/404.php";
    }
}else{
    echo "<script>location.href = '/?page=home'</script>";
}