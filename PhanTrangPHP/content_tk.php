<?php
    $page = isset($_GET['page'])?$_GET['page']:1;
    $page = is_numeric($page)?$page:1;
    $from = ($page-1)*SO_SP_TREN_TRANG;


    if(isset($_GET['keyword']))
        $result = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham where ten like '%".$_GET['keyword']."%'
                                                                                or mota like '%".$_GET['keyword']."%'");
    else 
        $result = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham");
    
    $row = mysqli_fetch_row($result);
    $total = ceil($row[0]/SO_SP_TREN_TRANG);

    if(isset($_GET['keyword']))
        $result = chayTruyVanTraVeDL($link,"select * from tbl_sanpham where ten like '%".$_GET['keyword']."%' or mota like '%".$_GET['keyword']."%' limit ".$from.", ".SO_SP_TREN_TRANG);  
    else
        $result = chayTruyVanTraVeDL($link,"select * from tbl_sanpham limit ".$from.    ", ".SO_SP_TREN_TRANG);

    while($rows = mysqli_fetch_assoc($result)){
        echo "<a href='chitiet.php?sp=".$rows['id']."'><div class='sp'>
                <h2>".$rows['ten']."</h2>
                <p>Mô tả: ".$rows['mota']."</p>
                <p>Giá: ".$rows['gia']."</p>
        </div></a>";
    }

    echo "<br style='clear:both;'/>";
    // echo "<div class='pager'>";
    // for($i=1; $i<=$total; $i++)
    //     if($i != $page)
    //         echo "<a href='timkiem.php?page=".$i.(isset($_GET['keyword'])?"&keyword=".$_GET['keyword']:"")."'>$i</a>";
    //     else 
    //         echo "<span>$i</span>";
    // echo "</div>";
?> 
<style>
    /* .pager{
        background-color: orange; padding: 3px;
        text-align: center; margin-left: 5px; word-spacing: 10px;
    } */
</style>