<?php 

session_start();

$allowed_lang = array ('eng','ar','fr');

if (isset($_GET['lang']) === true && in_array($_GET['lang'], $allowed_lang) === true ) {
    $_SESSION['lang'] =  $_GET['lang'];

} else if (isset($_GET['lang']) === false ) {
    $_SESSION['lang'] =  'eng';
}

include $_SESSION['lang'].'.php';

?>