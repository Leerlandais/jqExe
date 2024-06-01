<?php

if(isset($_GET['p'])) {

    switch($_GET["p"]) {

        case 'home' :
            $title = 'jQuery Team Exercise - Basic css/text';
            $navHome = "disabled";
            include "../view/public/pubhome.view.php";
            break;
        case 'slide' :
            $title = 'jQuery Team Exercise - Slide and Toggle';
            $navSlide = "disabled";
            include "../view/public/pubslide.view.php";
            break;
        case 'next' :
            $title = 'jQuery Team Exercise - Next, Prepend, etc';
            $navNext = "disabled";
            include "../view/public/pubslide.view.php";
            break;
        case 'animate' :
            $title = 'jQuery Team Exercise - Animation';
            $navAnimate = "disabled";
            include "../view/public/pubslide.view.php";
            break;
        default :
            $title = "Page Not Found";
            include("../view/public/error404.view.php");
        break;
    }
}else {
    $title = 'jQuery Team Exercise - Basic';
    $navHome = "disabled";
    include "../view/public/pubhome.view.php";
}


die ();