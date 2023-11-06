<?php 

if($_SERVER['SERVER_NAME'] == "localhost"){
    define("ROOT","http://localhost/music_lab/public");
}else{
    define("ROOT","http://www.mywebsite.com");
}
?>