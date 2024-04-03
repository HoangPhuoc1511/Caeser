<?php
    session_start();
    require_once "db_module.php"; 
    require_once "users_module.php";
    $link = NULL;
    taoketNoi ($link);
    if (dangxuat ()) {
        giaiPhongBoNho(Slink, true); 
        header ("Location: dangki.php");
    }else{
        giaiPhongBoNho(Slink, true);
        header("Content-type: text/html; charset=utf8"); 
        echo "Không thể đăng xuất !";
} ?>