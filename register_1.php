<?php
include_once 'dbConnection.php';
ob_start();
$school_name = $_POST['school_name'];
$school_name= ucwords(strtolower($school_name));
$school_address = $_POST['school_address'];
$p_name = $_POST['p_name'];
$p_mobile = $_POST['p_mobile'];
$sf_name = $_POST['sf_name'];
$ss_name = $_POST['ss_name'];
$st_name = $_POST['st_name'];
$school_name = stripslashes($school_name);
$school_name = addslashes($school_name);
$school_name = ucwords(strtolower($school_name));
$school_address = stripslashes($school_address);
$school_address = addslashes($school_address);
$p_name = stripslashes($p_name);
$p_name = addslashes($p_name);
$p_mobile = stripslashes($p_mobile);
$p_mobile = addslashes($p_mobile);
$sf_name = stripslashes($sf_name);
$sf_name = addslashes($sf_name);
$ss_name = stripslashes($ss_name);
$ss_name = addslashes($ss_name);
$st_name = stripslashes($st_name);
$st_name = addslashes($st_name);

/*$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
*/
$q3=mysqli_query($con,"INSERT INTO register VALUES  ('$school_name' , '$school_address' , '$p_name','$p_mobile' ,'$sf_name', '$ss_name', '$st_name')");
if($q3)
{
session_start();
$_SESSION["school_name"] = $school_name;
/*$_SESSION["name"] = $name;*/

header("location:register.php?q=1");
}
else
{
header("location:index.php?q7=School Name Registered!!!");
}
ob_end_flush();
?>