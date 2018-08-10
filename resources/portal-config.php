<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die; 


switch(THIS_PAGE){

    case 'index.php':
        $title = "WEB120 Home Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'big.php':
        $title = "WEB120 Big Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'BIG';
    break;
    
    case 'aia.php':
        $title = "WEB120 AIA Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'AIA';
    break;

    case 'flowchart.php':
        $title = "WEB120 Flowchart Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Flowchart';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
    
}


?>
