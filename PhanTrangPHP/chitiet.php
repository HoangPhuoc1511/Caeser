<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("module.php");
        $link = taoKetNoi();
     ?>
    <div id="container">
        <div id="banner"></div>
        <div id="menu"><a href="./">Home</a></div>
        <div id="lmenu">
            <ul>
                <?php include_once("menu.php");?>
            </ul>
        </div>
        <div id="content">
            <?php
                if(isset($_GET['sp'])){
                    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id=".$_GET['sp']);
                    while($rows=mysqli_fetch_assoc($result)){
                        echo " <div>
                            <h2>".$rows['ten']."</h2>
                            <p>Mô tả: ".$rows['mota']."</p>
                            <p>Giá: ".$rows['gia']."</p>
                        </div>";
                    }
                }
             ?>
        </div>
    </div>
    <?php
        giaiPhongBoNho($link, $result);
    ?>
</body>
</html>