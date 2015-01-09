<?php
    include "config.php";

    $id=$_GET['id'];
    $query="SELECT * FROM `students`.`reg_info` WHERE `reg_info`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
    $track=$rows['pre_track'];
    $ssc=$rows['ssc_board'];
    $radio=$rows['has_laptop'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>FTFLMS</title>
</head>
<body>
<style type="text/css">
<!--
.style1 {color: #004080}
-->
 </style>
<h3 align="center">Applicant Personal Information</h3>
<form action="read.php?id=<?php echo $_GET['id'] ?>" method="post">
<input type="hidden" id="update_id" value="<?php echo $id ?>" />
<table border="1" width="70%" height="758" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center"><span class="style1">Track Information</span></div>
          <span class="style1">
            <hr align="center"/>
          </span></td>
    </tr>
    <tr>
      <td width="38%" align='right'><div align="center">Preferred Track :</div></td>
  <td width="62%" align='left'><select id="track" name="track">
            <option value="1" selected="selected">--Select Track--</option>
            <option <?php if ($track == 'ITS' ) echo 'selected'; ?> value="ITS">ITS</option>
            <option <?php if ($track == 'ITES' ) echo 'selected'; ?> value="ITES">ITES</option>
            <option <?php if ($track == 'ITSS' ) echo 'selected'; ?> value="ITSS">ITSS</option>
    </select>    </tr>
    <tr>
        <td align='right'><div align="center">S.S.C Board :</div></td>
        <td width="62%" align='left'><select name="ssc">
            <option value="1" selected="selected">--Select Board--</option>
            <option <?php if ($ssc == 'ITS' ) echo 'selected'; ?> value="Dhaka">Dhaka</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Jessore">Jessore</option>
            <option value="Comilla">Comilla</option>
            <option value="Dinajpur">Dinajpur</option>
            <option value="Barisal">Barisal</option>
            <option value="Madrasah">Madrasah</option>
            <option value="Technical">Technical</option>
            <option value="DIBS">DIBS</option>
    </select>    </tr>
    <tr>
        <td align='right'><div align="center">H.S.C Board :</div></td>
        <td align='left'><select name="hsc">
          <option value="" selected="selected">--Select Board--</option>
          <option value="Dhaka">Dhaka</option>
          <option value="Chittagong" >Chittagong</option>
          <option value="Rajshahi">Rajshahi</option>
          <option value="Sylhet">Sylhet</option>
          <option value="Jessore">Jessore</option>
          <option value="Comilla">Comilla</option>
          <option value="Dinajpur">Dinajpur</option>
          <option value="Barisal">Barisal</option>
          <option value="Madrasah">Madrasah</option>
          <option value="Technical">Technical</option>
          <option value="DIBS">DIBS</option>
        </select>
    </tr>
    <tr>
        <td align='right'><div align="center">Has Laptop: </label></td>
        <td colspan="2"><input type="radio" name="laptop" value="yes" id="yes" <?php if($radio==1) echo 'checked="checked"'; ?> />Yes
          <input type="radio" name="laptop" value="no" id="no" <?php if($radio==0) echo 'checked="checked"'; ?> />
        No        </label>  </td>  </tr>
    <tr>
        <td align='right'><div align="center">S.S.C Roll :</div></td>
        <td align='left'><input type="text" name="ssc_roll" /></td>
    </tr>
    <tr>
        <td align='right'><div align="center">H.S.C Roll :</div></td>
       <td align='left'> <input type="text" name="hsc_roll" /></td>
    </tr>
    <tr>
        <td align='right'><div align="center">Preferred Exam Center :</div></td>
        <td align='left'><select name="exam_center">
            <option value="1" selected="selected">BCC Dhaka</option>
            <option value="2">BCC Chittagong</option>
            <option value="3">BCC Rajshahi</option>
            <option value="4">BCC Barishal</option>
            <option value="5">BCC Khulna</option>
            <option value="6">BCC Sylhet</option>
            <option value="7">BCC Faridpur</option>
        </select>
    </td>
    <tr>
          <td colspan="2"><div align="center"><span class="style1">Basic Information</span></div><span class="style1">  <hr align="center"/>
                                                                        </span></td>
                                                                  <tr>
        <td align='right'><div align="center">Name :</div></td>
       <td align='left'> <input type="text" name="name" /></td>
        </tr>
        <tr>
        <td align='right'><div align="center">Father :</div></td>
        <td align='left'><input type="text" name="fname" /></td>
        
    </tr>
    <tr>
        <td align='right'><div align="center">Mother :</div></td>
        <td align='left'><input type="text" name="mname" />
    </tr>
    <tr>
        <td align='right'><div align="center">Gender :</div></td>
       <td align='left'> <select name="gender">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
    </tr>
    <tr>
        <td align='right'><div align="center">Religion :</div></td>
        <td align='left'><select name="religion">
            <option value="Islam">Islam</option>
            <option value="Christianity">Christianity</option>
            <option value="Buddhism">Buddhism</option>
            <option value="Hinduism">Hinduism</option>
            <option value="Others">Others</option>
        </select>
    </tr>
    <tr>
        <td align='right'><div align="center">Date of Birth :</div></td>
        <td align='left'><input title="Date format: YYYY-MM-DD" placeholder="yyyy-mm-dd" maxlength="10" type="text" name="bdate" />
    </tr>
    <tr>
        <td align='right'><div align="center">Nationality </label>
   <td align='left'> <input maxlength="255" type="text" name="nationality" />    </tr>
    <tr>
        <td align='right'><div align="center">National ID :</div></td>
        <td align='left'><input maxlength="17" minlength="13" type="text" name="id_national" />
    </tr>
 
    <tr>
        <td align='right'><div align="center">Birth Reg # </label>
   <td align='left'> <input maxlength="17" type="text" name="breg" />    </tr>
    <tr>
        <td align='right'><div align="center">Passport Number </label>
       <td align='left'> <input maxlength="17" type="text" name="pass_number" />
       <tr>
       
       <td colspan="2"><div align="center">
         <div align="center"><span class="style1">Contact Information</span></div>
       </tr>
    <tr>
        <td align='right'><div align="center">Mobile </label>
    <td align='left'><input maxlength="255" type="text" name="mobile" />    </tr>
    <tr>
        <td align='right'><div align="center">Home Phone </label>
    <td align='left'><input maxlength="255" type="text" name="h_phone" />    </tr>
    <tr>
        <td align='right'><div align="center">Emergency Contact </label>
   <td align='left'> <input maxlength="255" type="text" name="e_contact" />    </tr>
    <tr>
        <td align='right'><div align="center">Email </label>
   <td align='left'> <input maxlength="255" type="text" name="email" />    </tr>
    <tr>
        <td align='right'><div align="center">Alternate Email </label>
    <td align='left'><input maxlength="255" type="text" name="a_email" />    </tr>
    <tr>
        <td align='right'><div align="center">Current Location :</div></td>
       <td align='left'> <select name="c_location">
            <option value="1" selected="selected">Dhaka</option>
            <option value="2">Chittagong</option>
            <option value="3">Khulna</option>
            <option value="4">Barishal</option>
            <option value="5">Barguna</option>
            <option value="6">Barisal</option>
            <option value="7">Bhola</option>
            <option value="8">Jhalokat</option>
            <option value="9">Patuakhali</option>
            <option value="10">Pirojpur</option>
            <option value="11">Bandarban</option>
            <option value="12">Brahmanbaria</option>
            <option value="13">Chandpur</option>
            <option value="14">Comilla</option>
            <option value="15">Cox's Bazar </option>
            <option value="16">Feni</option>
            <option value="17">Khagrachhari</option>
            <option value="18">Lakshmipur</option>
            <option value="19">Noakhali </option>
            <option value="20">Rangamati</option>
            <option value="21">Faridpur</option>
            <option value="22">Gazipur</option>
            <option value="23">Gopalganj </option>
            <option value="24">Jamalpur</option>
            <option value="25">Kishoreganj </option>
            <option value="26">Madaripur</option>
            <option value="27">Manikganj </option>
            <option value="28">Munshiganj</option>
            <option value="29">Mymensingh </option>
            <option value="30">Narayanganj </option>
            <option value="31">Narsingdi</option>
            <option value="32">Netrakona</option>
            <option value="33">Rajbari </option>
            <option value="34">Shariatpur</option>
            <option value="35">Sherpur </option>
            <option value="36">Tangail</option>
            <option value="37">Bagerhat </option>
            <option value="38">Chuadanga</option>
            <option value="39">Jessore</option>
            <option value="40">Jhenaidah</option>
            <option value="41">Kushtia </option>
            <option value="42">Magura</option>
            <option value="43">Meherpur</option>
            <option value="44">Narail </option>
            <option value="45">Satkhira</option>
            <option value="46">Bogra</option>
            <option value="47">Joypurhat</option>
            <option value="48">Naogaon</option>
            <option value="49">Natore</option>
            <option value="50">Nawabganj</option>
            <option value="51">Pabna</option>
            <option value="52">Rajshahi</option>
            <option value="53">Sirajganj</option>
            <option value="54">Dinajpur</option>
            <option value="55">Gaibandh</option>
            <option value="56">Kurigram </option>
            <option value="57">Lalmonirhat</option>
            <option value="58">Nilphamari</option>
            <option value="59">Panchagarh </option>
            <option value="60">Rangpur</option>
            <option value="61">Thakurgaon </option>
            <option value="62">Habiganj</option>
            <option value="63">Moulvibazar </option>
            <option value="64">Sunamganj</option>
            <option value="65">Sylhet</option>
        </select>
    </tr>
    <tr>
        <td align='right'><div align="center">Present Address :</div></td>
       <td align='left'> <textarea name="p_address"></textarea>
    </tr>
    <tr>
        <td align='right'><div align="center">Permanent Address :</div></td>
        <td align='left'><textarea name="per_address"></textarea>
        </tr>
      <tr>
    <td colspan="2">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <div align="center">
   
    <button type="submit" name="submit" style="width: 210px;">Submit</button>
    <!-- &nbsp;&nbsp;
    <button type="reset" style="width: 210px;">Cancel</button> -->
</div></td></tr>                       
</table>
</form>
</body>
</html>