<?php

    function setPNGHeader(){
        header("Content-Type: image/png");
        header("Expires: -1");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Prama: no-cache");
    }

    function makeCaptcha($source, $len){
        $c = "";
        for($i = 0; $i <$len; $i++){
            $c.= substr($source, rand(0, strlen($source)-1),1);
        }
        return $c;
    }
    function makePNGCaptcha($captcha){
        $img = imagecreate(200,50);
        imagecolorallocate($img,0,0,0);
        $color = imagecolorallocate($img,255,255,0);
        imagettftext($img,25,5,10,45,$color,"aaa.TTF",$captcha);
        imagepng($img);
        imagedestroy($img);
    }

?>