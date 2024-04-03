<?php
include("data.php");
if(isset($_GET['page'])){
    if($_GET['page'] == "home"){
        foreach($data as $key => $value){
            echo "<a href='?who=".$key."&page=detail'>
                    <div class='box'>
                        <img src='img/".$value[1]."'>
                        <h3>".$value[0]."</h3>
                    </div>
                </a>";
        }
    }else if($_GET['page']=="detail"){

    }
}else header("Location: ./?page=home");
?>
