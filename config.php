<?php
$conn = new mysqli('localhost','root','','aicte')
    or die ('Cannot connect to db');


    function getgeneratedId(){
        $unique=uniqid();
        $file = substr($unique, strlen($unique) - 6, strlen($unique));
        $aid="ID".$file;
        return $aid;
    }
    function getTimestamp(){
        $t=time();
        return $t;
    }
    ?>

