<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once("module.php");
        $link = taoKetNoi();
    ?>
    <div id="container">
        <div id="banner"></div>
        <div id="menu"><?php include_once("task.php")?></div>
        <div id="lmenu">
            <ul>
                <?php include_once("menu.php");?>
            </ul>
        </div>
        <div id="content">
            <?php include_once("content_tk.php");?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                        for($i=1; $i<=$total; $i++)
                        if($i != $page)
                            echo "<li class='page-item'><a class='page-link' href='timkiem.php?page=".$i.(isset($_GET['keyword'])?"&keyword=".$_GET['keyword']:"")."'>$i</a></li>";
                        else 
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    ?>
                </ul>
            </nav> 
        </div>
    </div>
    <?php
        giaiPhongBoNho($link, $result);
    ?>
</body>
</html>