
<?php 


require_once('dbconfig/class.mysql.php');   
$dbObj = new DataBasePDO();


extract($_REQUEST);

$wrArray=array("`id`='$id'");
$row=$dbObj->selectData('signup',$wrArray)[0];

?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Freepik</title>
    <link rel="stylesheet" href="css/styles.css">
        
</head>
<body>

<div class="modal">
    <a href="index_upin.php"><span class="close" title="Close Modal">&times;</span></a>
  
  <form class="modal-content container" action="index_upin.php" method="post"  enctype="multipart/form-data">
    <div class="container">      
      <h1 ><img src="images/icon.png" alt="Freepik" width="30"> Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
    </div>
      <hr>
      <input type="hidden" name="id" value="<?=$row['id'];?>">

      <label for="fname"><b>Full Name <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="text" value="<?=$row['fname'];?>" name="fname" required>

      <label for="uname"><b>User Name <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="text" value="<?=$row['uname'];?>" name="uname" required>

      <label for="pnumber"><b>Phone Number <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="text" value="<?=$row['pnumber'];?>" name="pnumber" required>

      <label for="eid"><b>Email <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="text" value="<?=$row['eid'];?>" name="eid" required>

      <label for="pword"><b>Password <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="password" value="<?=$row['pword'];?>" name="pword" required>

      <label for="rpword"><b>Repeat Password <b style="color:rgb(255, 0, 0)">&diams;</b></b></label>
      <input type="password" value="<?=$row['pword'];?>" name="rpword" required>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">

      <input type="button" value="Cancel" onclick="location.href='index_re.php'" class="cancelbtn cancel-inbtn" >      
      <button type="submit" class="signupbtn">Sign Up</button>      
      </div>
    </div>
  </form>
</div>

</body>
</html>
