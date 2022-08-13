<?php
try{
    $db= new PDO("mysql:host=localhost;dbname=assignment;charset=utf8","root","");
}catch(PDOException $e){
echo $e->getMessage();
}

?>