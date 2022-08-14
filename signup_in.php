<?php 
session_start();
if(!isset($_SESSION['id']))
{
    echo "<script>window.location.assign('index.php')</script>";
}


require_once('dbconfig/class.mysql.php');   
$dbObj = new DataBasePDO();

extract($_REQUEST); 

	$valAr['fname']=$fname;
	$valAr['uname']=$uname;
	$valAr['pnumber']=$pnumber;
	$valAr['eid']=$eid;	
    $valAr['pword']=$pword;	
    $results =$dbObj->insertData('signup',$valAr);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head> 
  
  <link rel="stylesheet" href="css/nav-bar.css">
  <link rel="stylesheet" href="css/freepik.css">
  <link rel="stylesheet" href="css/signup_in.css">
 
</head>

<body>
<h2><img src="images/logo.png" alt="" width="300px"><br>SIGN UP DETAILS CONFIRMATION</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>User Name</th>
            <th>Phone Number</th>
            <th>Email ID</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?=$fname?></td>
            <td><?=$uname?></td>
            <td><?=$pnumber?></td>
            <td><?=$eid?></td>
            <td><?=$pword?></td>
        </tr>
        
        <tbody>
    </table>
    
    
</div>
<div class="licon">      
      <input type="button" value="Back" onclick="location.href='signup.php'" class="cancelbtn back-siin" >
      <input type="button" value="Confirm" onclick="location.href='index.php'" class="cancelbtn next-siin" >
    </div>

</body>

</html>