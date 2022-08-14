
<?php 
session_start();
if(!isset($_SESSION['id']))
{
    echo "<script>window.location.assign('index.php')</script>";
}

require_once('dbconfig/class.mysql.php');   
$dbObj = new DataBasePDO();

extract($_REQUEST);

 $wrArray=array("`id`='$id'");

 $row=$dbObj->deleteData('signup',$wrArray);


?>

    
<div class="spacer">
    <a href="index_re.php">
        <button type="submit" value="Send" style="margin-top:15px;">Table</button>
    </a>
</div>

</form>

</div> <!-- end of form class -->

</body>
</html>