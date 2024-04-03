<?php
    require_once "config.php";
    function taoKetNoi() 
    {   
        $link = mysqli_connect(HOST, USER, PASSWORD, DB);
        if(mysqli_connect_errno()){
            echo "Lỗi kết nối đến máy chủ: ". mysqli_connect_error(); 
            exit();
        }
        return $link;
    }

    function chayTruyVanTraVeDL($link, $q)
    {
        $result = mysqli_query($link, $q);
        return $result;
    }

    // Insert, update, delete ==> result trả về True/False 
    funCtion chayTruyVanKhongTraVeDL($link, $q)
    {
        $result = mysqli_query($link, $q);
        return $result;
    } 

    function giaiPhongBoNho($link, $result)
    {
        try{
            mysqli_close($link);
            mysqli_free_result($result);
        }catch (TypeError $e){

        }
    }
?>
