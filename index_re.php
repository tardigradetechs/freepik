<?php
session_start();

require_once ('index_nav-bar.php');
require_once('dbconfig/class.mysql.php');   
$dbObj = new DataBasePDO();
$id = $_SESSION["id"];

$wrArray=array("`id`='$id'");
$row=$dbObj->selectData('signup',$wrArray)[0];

print_r ($results);

?>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th colspan="6" class="cdet">Your Details</th>
                    <th colspan="2" rowspan="2" class="update">Update</th>
                </tr>
                <tr>
                    <th>Serial Number</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Password</th>
                </tr>               
            </thead>
            <?php
                $i=1;            
                
      
            ?>
            <tbody>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['fname'];?></td>                    
                    <td><?=$row['uname'];?></td>
                    <td><?=$row['pnumber'];?></td>
                    <td><?=$row['eid'];?></td>
                    <td><?=$row['pword'];?></td>
                    <td class="editbut"><a href="index_edit.php?id=<?=$row['id'];?>">Edit</a></td>
                    <td class="delbut"><a href="index_de.php?id=<?=$row['id'];?>">Delete</a></td>
                </tr>                
                <!-- and so on... -->
            </tbody>
            <?php 
               
            ?>
        </table>     

    </div>
</body>
</html>