<?php

if(!isset($_SESSION['login'])){
    echo "<script>location.href = '/?page=auth'</script>";
}

?>