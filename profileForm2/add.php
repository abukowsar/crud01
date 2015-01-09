<?php
    include "config.php";
    $query="INSERT INTO `students`.`reg_info` (`id`, `pre_track`, `ssc_board`, `hsc_board`, `has_laptop`, `ssc_roll`, `hsc_roll`, `pre_exam_center`, `name`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `id_national`, `birth_reg`, `passport_number`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`) VALUES ('', '$_POST[track]', '$_POST[ssc]', '$_POST[hsc]', '$_POST[laptop]', '$_POST[ssc_roll]', '$_POST[hsc_roll]', '$_POST[exam_center]', '$_POST[name]', '$_POST[fname]', '$_POST[mname]', '$_POST[gender]', '$_POST[religion]', '$_POST[bdate]', '$_POST[nationality]', '$_POST[id_national]', '$_POST[breg]', '$_POST[pass_number]', '$_POST[mobile]', '$_POST[h_phone]', '$_POST[e_contact]', '$_POST[email]', '$_POST[a_email]', '$_POST[c_location]', '$_POST[p_address]', '$_POST[per_address]');";

    if(mysqli_query($con,$query))
        echo "Successfully saved into Database";
    else
        die("Error: ".mysqli_errno($con));
?>



<?php
header('location: read.php');
   mysqli_close($con);
?>