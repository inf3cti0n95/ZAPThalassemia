<?php
  include_once('connection.php');
?>

<?php 

    if(isset($_REQUEST['fname']) && $_REQUEST['fname'] != "")
	$fname = $_REQUEST['fname'];

	if(isset($_REQUEST['lname']) && $_REQUEST['lname'] != "")
	$lname = $_REQUEST['lname'];	

	if(isset($_REQUEST['email']) && $_REQUEST['email'] != "")
	$email = $_REQUEST['email'];

	if(isset($_REQUEST['password']) && $_REQUEST['password'] != "")
	$pwd = $_REQUEST['password'];

	
	if(isset($_REQUEST['phno']) && $_REQUEST['phno'] != "")
	$phno = $_REQUEST['phno'];

	if(isset($_REQUEST['birthdate']) && $_REQUEST['birthdate'] != "")
	$bdate = $_REQUEST['birthdate'];	

	if(isset($_REQUEST['gender']) && $_REQUEST['gender'] != "")
	$gender = $_REQUEST['gender'];

	if(isset($_REQUEST['nation']) && $_REQUEST['nation'] != "")
	$nationality = $_REQUEST['nation'];

	if(isset($_REQUEST['religion']) && $_REQUEST['religion'] != "")
	$religion = $_REQUEST['religion'];

	if(isset($_REQUEST['caste']))
	$caste = $_REQUEST['caste'];

	if(isset($_REQUEST['bloodgroup']) && $_REQUEST['bloodgroup'] != "")
	$bloodgroup = $_REQUEST['bloodgroup'];

	if(isset($_REQUEST['th_status']) && $_REQUEST['th_status'] != "")
	$th_status = $_REQUEST['th_status'];

	if(isset($_REQUEST['usertype']) && $_REQUEST['usertype'] != "")
	$usertype = $_REQUEST['usertype'];	

  
       $u_type_fk = 1;
		$docregid = "";
		if($usertype == 'doctor'){
			$u_type_fk = 2;
			if(isset($_REQUEST['docregid']) && $_REQUEST['docregid'] != "")
			$docregid = $_REQUEST['docregid'];
		}
		if(mysqli_query($conn,"INSERT INTO user_table(u_fname, u_lname, u_email, u_phno, u_type_fk, u_doc_regid, u_pwd, u_bdate ) 
		VALUES ('$fname', '$lname', '$email', $phno, $u_type_fk, '$docregid', '$pwd',$bdate)"))
		echo "";
		else
		echo mysqli_error($conn);

		$q = mysqli_query($conn,"SELECT u_id from user_table WHERE u_email='$email'");

		$row = mysqli_fetch_array($q,MYSQLI_ASSOC);
		$u_id_fk = $row["u_id"];


		if(mysqli_query($conn,"INSERT INTO med_data(u_id_fk, md_gender, md_nationality, md_religion, md_caste, md_bloodgrp, md_thstatus ) 
		VALUES ($u_id_fk, '$gender', '$nationality', '$religion', '$caste', '$bloodgroup', '$th_status')"))
		echo "Entered";
		else
		echo mysqli_error($conn);


   

?>
