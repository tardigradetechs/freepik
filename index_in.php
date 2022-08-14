<?php 
session_start();
require_once('dbconfig/class.mysql.php');   
$dbObj = new DataBasePDO();

extract($_REQUEST);
$sql = "select * from signup where uname='$uname' and pword='$pword'";

$result = $dbObj->getOneRow($sql);	

    if ($result){
    
         $_SESSION["uname"] = $result['uname'];        
         $_SESSION["id"] = $result['id'];

         echo "<script>window.location.assign('index_re.php')</script>";

    }

    else{

        echo "<script>window.location.assign('index.php')</script>";
    }

    



?>