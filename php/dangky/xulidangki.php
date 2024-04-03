<?php
    session_start();

    require_once "db_module.php"; 
    require_once "validate_module.php"; 
    require_once "users_module.php";

    $link = NULL;
    taoketNoi ($link);
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email']) &&isset($_POST['captcha'])){
        $valid = $_POST['password']=$_POST['password2'];// kiểm tra hai ở nhập mặn khẩu có giống nhau không
        $valid = $valid  &&validateLenUP($_POST['username ']); // a name phải lớn hơn 8 và nhỏ hơn 30 kí tự 
        $valid = $valid &&validateLenUP($_POST['password']); //password phải lớn hơn 8 và nhỏ hơn 30 ki Sự 
        $valid = $valid &&validateEmail($_POST['email']); //email phải đúng định dạng chuẩn abcxyz.co 
        $valid = $valid &&(($_SESSION['captcha']=$_POST['captcha'])); //exptcha nhập vào phải đăng 
        if($valid){ //nêu các điều kiện của dữ liêu nhập vào thỏa mẫu 
            if(existsUsername($link, $_POST["username"])){ //nêu 190 THEO đã tồn tại trong CSDL
                giaiPhongBoNho($link, true);
                header ("Location: dangki.php?msg-duplicate&username=".$_POST['username']."&email=".$_POST['email']); }
            }else{ //nếu username chưa tồn tại thì mới cho phép dùng username đó để đăng kí 
                dangki ($link, $_POST["username"], $_POST["password"], $_POST["email"]);
                giaiPhongBoNho(Slink, true); header ("Location: dangki.php?msg-done");
    }
    }else{ //nếu các điều kiện của dữ liệu nhập vào không thỏa mãn
                giaiPhongBoNho(Slink, true);
                header ("Location: dangki.php?msg-unvalid-data&username=".$_POST['username']."&email=".$_POST['email']);
    }
    ?>