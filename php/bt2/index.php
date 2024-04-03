<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doanh nhân</title>
    <style>
        body {margin:0px; }
#box {
    width: 1000px; 
    margin: 0px auto;
}
#banner {
    height:100px; 
    background-color:red; 
}
#menu {
    height:30px; 
    background-color: lightgray; 
}
#lmenu{
    width:200px; 
    height:300px; 
    background-color:green; 
    float:left;
} 
#content {
    width:560px; 
    background-color: #0CF; 
    float:left;
    padding:20px; 
} 
#rmenu {
    width:200px; 
    height:300px; 
    background-color: #FC3; 
    float:left;
} 
#footer {
    height:150px; 
    background-color:#033; 
}
.box{
    width:180px;
    height: 200px;
    margin-right: 6px;
    margin-top:10px;
    float:left;
    background-color:#636;
    text-align:center;
    padding-top:10px;
}
.box img{
    width:150px;
} 
.box h3 {
    color: yellow; 
}
    </style>
</head>
<body>
    <div id="container">
        <div id="banner"></div>
        <div id="menu"><a href='./?page=home'>Home</a></div> 
        <div id="lmenu"></div>
        <div id="content">
        <?php include "detail.php"; ?>

        </div> 
        
        <div id="rmenu"></div>
        <br style="clear:both;"> 
        <div id="footer">
    </div>


</body>
</html>