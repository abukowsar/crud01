<?php
    include "config.php";

    $query="SELECT * FROM reg_info";
    $result=mysqli_query($con,$query);
    $c="<br />";
?>

    <!DOCTYPE html>
    <html>
    <head>
       <style type="text/css">
<!--
.style1 {color: #004080}
-->
 </style>
 
    </head>
    
    
    <body>
    
      <div class='formbox'>
    <div align="center">|<a href="index.html"> Registration </a>| <a href="read.php">List </a>|  
    </div>
</div>
<h2 align="center">Applicant List</h2> 
   <table border="1" width="70%" height="176" align="center" cellpadding="2" cellspacing="0">
<thead>
        <tr>
            <th height="64">ID</th>
          <th>Track Information</th>
            <th>Basic Information</th>
            <th>Contact Information</th>
           
        </tr>
        </thead>
        <tbody>
        
        <?php foreach($result as $row){ ?>
            <tr>
                <td height="65"><?php echo $row['id'] ?></td>
              <td><?php echo "Preferred Track: ".$row['pre_track'].$c."S.S.C Board: ".$row['ssc_board'].$c."H.S.C Board: ".$row['hsc_board'].$c."Laptop Status: ".$row['has_laptop'].$c."S.S.C Roll : ".$row['ssc_roll'].$c."h.S.C Roll: ".$row['hsc_roll'].$c."Exam Center : ".$row['pre_exam_center'] ?></td>
                <td><?php echo "Name: ".$row['name'].$c."Father Name: ".$row['father'].$c."Mother Name: ".$row['mother'].$c."Gender: ".$row['gender'].$c."Religion: ".$row['religion'].$c."Date of Barth: ".$row['birth_date'].$c."Nationality: ".$row['nationality'].$c."NID: ".$row['id_national'].$c."Birth Regi No: ".$row['birth_reg'].$c."Passport No: ".$row['passport_number'] ?></td>
                <td><?php echo "Mobile: ".$row['mobile'].$c."Home Phone: ".$row['h_phone'].$c."Emmargacny Contact: ".$row['e_contact'].$c."Email: ".$row['email'].$c."Alternate Email: ".$row['a_email'].$c."Current Location: ".$row['c_location'].$c."Present Address: ".$row['p_address'].$c."Permanant Address: ".$row['per_address'] ?></td>
               

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>