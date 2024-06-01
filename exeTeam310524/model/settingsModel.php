<?php

function changeHeaderSetting(string $setting) : bool {
    if($setting === "true") {
        $_SESSION["headerAnimate"] = "true";
        return true;
    }else if ($setting === "false") {
        $_SESSION["headerAnimate"] = "false";
        return true;
    } 
    return false;
}