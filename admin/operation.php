<?php 

include '../config.php';

if (!$_SESSION["admin_uname"]) {

	header("Location: login.php");
}

//Admin Login Operation

if (isset($_POST['login'])) {
	$admin_uname=htmlspecialchars(trim($_POST['admin_uname']));
	$admin_password=htmlspecialchars(trim(md5($_POST['admin_password'])));
	if (!$admin_uname || !$admin_password) {
		header("Location: login.php?loggin=error");
	}else{

			$query= $db->prepare("SELECT * FROM tbladmin WHERE admin_uname=? AND admin_password=?");
			$query->execute(array($admin_uname, $admin_password));
			$admin_login=$query->fetch(PDO::FETCH_ASSOC);

			if ($admin_login) {
				$_SESSION["login"] =true;
				$_SESSION["admin_uname"] = $admin_login["admin_uname"];
				$_SESSION["admin_password"] = $admin_login["admin_password"];

				header("Location: index.php");
			}else{
				header("Location: login.php?loggin=no");
			}



	}
}
/// Admin Username change
if (isset($_POST['update-uname'])) {

	$admin_id=$_GET['admin_id'];
	$admin_uname=$_POST['admin_uname'];

	if (!$admin_uname) {
		header("Location: profile.php?admin-update=error");
	}else{
		$query=$db->prepare("UPDATE tbladmin SET admin_uname=? WHERE admin_id=?");
		$update=$query->execute(array($admin_uname, $admin_id));
		if ($update) {
			header("Location: profile.php?admin-update=success");
		}else{
			header("Location: profile.php?admin-update=failed");
		}
	}
	
}

///Password change

if (isset($_POST['password-change'])) {

	$admin_id=$_GET['admin_id'];
	$old_password=md5($_POST['old_password']);
	$new_password=md5($_POST['new_password']);

	if (!$old_password || !$new_password) {
		header("Location: profile.php?password-change=error");
	}else{
		$query=$db->prepare("SELECT * FROM tbladmin WHERE admin_password=?");
		$query->execute(array($old_password));
		$query->fetch(PDO::FETCH_ASSOC);
		$count=$query->rowCount();
		if ($count==0) {
			header("Location: profile.php?password-change=oldpasswordfailed");
		}else{
			$query=$db->prepare("UPDATE tbladmin SET admin_password=?");
			$update = $query->execute(array($new_password));
			if ($update) {
				header("Location: profile.php?password-change=success");
			}else{
				header("Location: profile.php?password-change=failed");
			}
		}
	}
}

// GENERAL SETTİNG

if (isset($_POST["general-settings"])) {
	
	$site_id = $_GET['site_id'];

	$site_title = $_POST['site_title'];
	$site_url = $_POST['site_url'];
	$site_desc= $_POST['site_desc'];
	$site_keyw = $_POST['site_keyw'];
	$site_footer = $_POST['site_footer'];
	$site_color = $_POST['site_color'];

	if (!$site_title || !$site_url || !$site_desc || !$site_keyw || !$site_footer) {
		
		header("Location: general-settings.php?setting-update=error");
	}else{
		$query= $db->prepare("UPDATE tblsetting SET site_title=?, site_url=?, site_desc=?, site_keyw=?, site_footer=?, site_color=? WHERE site_id=?");
		$update=$query->execute(array($site_title, $site_url, $site_desc, $site_keyw, $site_footer,$site_color, $site_id ));
		
		if ($update) {
			header("Location: general-settings.php?setting-update=yes");
		}else{
			header("Location: general-settings.php?setting-update=no");
		}
	}
}

// END GENERAL SETTİNG

// MY İNFO


if (isset($_POST['myinfo'])) {

	$info_id = $_GET['info_id'];

	$info_image = $_POST['info_image'];
	$info_name = $_POST['info_name'];
	$info_job= $_POST['info_job'];
	$info_residence = $_POST['info_residence'];
	$info_residencelink = $_POST['info_residencelink'];
	$info_mail = $_POST['info_mail'];
	$info_phone= $_POST['info_phone'];
	$info_whatsapp = $_POST['info_whatsapp'];
	$info_whatsapplink = $_POST['info_whatsapplink'];

	if (!$info_image || !$info_name || !$info_job || !$info_residence || !$info_residencelink || !$info_mail || !$info_phone || !$info_whatsapp || !$info_whatsapplink) {
		header("Location: myinfo.php?info-update=error");
	}else{
		$query= $db->prepare("UPDATE tblinfo SET info_image=?, info_name=?, info_job=?, info_residence=?, info_residencelink=? ,info_mail=?, info_phone=?, info_whatsapp=?, info_whatsapplink=? WHERE info_id=?");

		$update=$query->execute(array($info_image, $info_name, $info_job, $info_residence, $info_residencelink, $info_mail, $info_phone, $info_whatsapp, $info_whatsapplink, $info_id));


		if ($update) {
			header("Location:myinfo.php?info-update=yes");
		}else{
			header("Location:myinfo.php?info-update=no");
		}

	}
}


// END MY İNFO


// MY SKİLLS

#ADD SKİLL
if (isset($_POST['add-skill'])) {

	$skill_name = $_POST['skill_name'];
	$skill_rate = $_POST['skill_rate'];

	if (!$skill_name || !$skill_rate) {
		header("Location: myskills.php?add-skill=error");

	}else{
		$query=$db->prepare("INSERT INTO tblskills SET skill_name=?, skill_rate=?");
		$insert=$query->execute(array($skill_name, $skill_rate));

		if ($insert) {
			header("Location: myskills.php?add-skill=yes");
		}else{
			header("Location: myskills.php?add-skill=no");
		}
	}


}



#UPDATE SKİLL




if (isset($_POST['edit-skill'])) {

	$skills_id = $_GET['skills_id'];

	$skill_name = $_POST['skill_name'];
	$skill_rate = $_POST['skill_rate'];


	if (!$skill_name || !$skill_rate) {
		header("Location: myskills.php?update-skill=error");
	}else{
		$query= $db->prepare("UPDATE tblskills SET skill_name=?, skill_rate=? WHERE skills_id=?");

		$update=$query->execute(array($skill_name, $skill_rate, $skills_id));


		if ($update) {
			header("Location:myskills.php?update-skill=yes");
		}else{
			header("Location:myskills.php?update-skill=no");
		}

	}
}


#DELETE SKILL

$deleteskill_id = $_GET['deleteskill_id'];

if (isset($deleteskill_id)) {
	$query = $db->prepare("DELETE FROM tblskills WHERE skills_id=?");
	$delete=$query->execute(array($deleteskill_id));
	if ($delete) {
		header("Location:myskills.php?delete-skill=yes");
	}else{
		header("Location:myskills.php?delete-skill=no");

	}
}


//--------------------------------------------------------------//

#ADD PROGRAM

if (isset($_POST['add-program'])) {

	$program_name = $_POST['program_name'];
	$program_rate = $_POST['program_rate'];

	if (!$program_name || !$program_rate) {
		header("Location: program-skills.php?add-program=error");

	}else{
		$query=$db->prepare("INSERT INTO tblprograms SET program_name=?, program_rate=?");
		$insert=$query->execute(array($program_name, $program_rate));

		if ($insert) {
			header("Location: program-skills.php?add-program=yes");
		}else{
			header("Location: program-skills.php?add-program=no");
		}
	}

}

if (isset($_POST['edit-program'])) {

	$program_id = $_GET['program_id'];

	$program_name = $_POST['program_name'];
	$program_rate = $_POST['program_rate'];


	if (!$program_name || !$program_rate) {
		header("Location: program-skills.php?update-program=error");
	}else{
		$query= $db->prepare("UPDATE tblprograms SET program_name=?, program_rate=? WHERE program_id=?");

		$update=$query->execute(array($program_name, $program_rate, $program_id));


		if ($update) {
			header("Location:program-skills.php?update-program=yes");
		}else{
			header("Location:program-skills.php?update-program=no");
		}

	}
}

$deleteprogram_id = $_GET['deleteprogram_id'];

if (isset($deleteprogram_id)) {
	$query = $db->prepare("DELETE FROM tblprograms WHERE program_id=?");
	$delete=$query->execute(array($deleteprogram_id));
	if ($delete) {
		header("Location:program-skills.php?delete-program=yes");
	}else{
		header("Location:program-skills.php?delete-program=no");

	}
}


//------------------------------------------------------------------------------//

#add certificate

if (isset($_POST['add-certificate'])) {
	$certificate_id = $_GET['certificate_id'];

	$certificate_name = $_POST['certificate_name'];
	$certificate_link = $_POST['certificate_link'];
	$certificate_desc = $_POST['certificate_desc'];
	$certificate_date = $_POST['certificate_date'];
	$certificate_company = $_POST['certificate_company'];



	if (!$certificate_name  || !$certificate_link || !$certificate_desc  || !$certificate_date || !$certificate_company) {
		header("Location:certificate.php?add-certificate=error");

	}else{
		$query=$db->prepare("INSERT INTO tblcertificates SET certificate_name=?, certificate_link=?, certificate_desc=?, certificate_date=?, certificate_company=? WHERE certificate_id=?");
		$insert=$query->execute(array($certificate_name, $certificate_link, $certificate_desc, $certificate_date, $certificate_company ));

		if ($insert) {
			header("Location: certificate.php?add-certificate=yes");
		}else{
			header("Location: certificate.php?add-certificate=no");
		}
	}


}

#update certificate

if (isset($_POST['edit-certificate'])) {

	$certificate_id = $_GET['certificate_id'];

	$certificate_name = $_POST['certificate_name'];
	$certificate_link = $_POST['certificate_link'];
	$certificate_desc = $_POST['certificate_desc'];
	$certificate_date = $_POST['certificate_date'];
	$certificate_company = $_POST['certificate_company'];


	if (!$certificate_name  || !$certificate_link || !$certificate_desc  || !$certificate_date || !$certificate_company) {
		header("Location: certificate.php?update-certificate=error");
	}else{
		$query= $db->prepare("UPDATE tblcertificates SET certificate_name=?, certificate_link=?, certificate_desc=?, certificate_date=?, certificate_company=? WHERE certificate_id=?");

		$update=$query->execute(array($certificate_name, $certificate_link, $certificate_desc, $certificate_date, $certificate_company, $certificate_id));


		if ($update) {
			header("Location: certificate.php?update-certificate=yes");
		}else{
			header("Location: certificate.php?update-certificate=no");
		}

	}
}

#delete certificate

$deletecertificate_id = $_GET['deletecertificate_id'];

if (isset($deletecertificate_id)) {
	$query = $db->prepare("DELETE FROM tblcertificates WHERE certificate_id=?");
	$delete=$query->execute(array($deletecertificate_id));
	if ($delete) {
		header("Location:certificate.php?delete-skill=yes");
	}else{
		header("Location:certificate.php?delete-skill=no");

	}
}

////////////////////////////////////////////////////////////////////////////////////


if (isset($_POST['add-school'])) {

	$school_name = $_POST['school_name'];
	$school_desc = $_POST['school_desc'];
	$school_date = $_POST['school_date'];
	$school_continue = $_POST['school_continue'];

	if (!$school_name || !$school_desc || !$school_date || !$school_continue) {
		header("Location: school.php?add-school=error");

	}else{
		$query=$db->prepare("INSERT INTO tblschools SET school_name=?, school_desc=?, school_date=?, school_continue=?");
		$insert=$query->execute(array($school_name, $school_desc, $school_date, $school_continue));

		if ($insert) {
			header("Location: school.php?add-school=yes");
		}else{
			header("Location: school.php?add-school=no");
		}
	}

}


if (isset($_POST['edit-school'])) {

	$school_id = $_GET['school_id'];

	$school_name = $_POST['school_name'];
	$school_desc = $_POST['school_desc'];
	$school_date = $_POST['school_date'];
	$school_continue = $_POST['school_continue'];

	if (!$school_name || !$school_desc || !$school_date ) {
		header("Location:school.php?update-school=error");
	}else{
		$query= $db->prepare("UPDATE tblschools SET school_name=?, school_desc=?, school_date=?, school_continue=? WHERE school_id=?");
		$update=$query->execute(array($school_name, $school_desc, $school_date, $school_continue, $school_id));

		if ($update) {
			header("Location:school.php?update-school=yes");
		}else{
			header("Location:school.php?update-school=no");
		}

	}
}

$deleteschool_id = $_GET['deleteschool_id'];

if (isset($deleteschool_id)) {
	$query = $db->prepare("DELETE FROM tblschools WHERE school_id=?");
	$delete=$query->execute(array($deleteschool_id));
	if ($delete) {
		header("Location:school.php?delete-school=yes");
	}else{
		header("Location:school.php?delete-school=no");

	}
}

////////////////////////////////////////////////////////////////////////

if (isset($_POST['social-media'])) {

	$sm_id = $_GET['sm_id'];

	$sm_facebook = $_POST['sm_facebook'];
	$sm_instagram = $_POST['sm_instagram'];
	$sm_twitter= $_POST['sm_twitter'];
	$sm_linkedin = $_POST['sm_linkedin'];
	$sm_youtube = $_POST['sm_youtube'];
	$sm_github = $_POST['sm_github'];

	$query= $db->prepare("UPDATE tblsocialmedia SET sm_facebook=?, sm_instagram=?, sm_twitter=?, sm_linkedin=?, sm_youtube=? ,sm_github=? WHERE sm_id=?");

	$update=$query->execute(array($sm_facebook, $sm_instagram, $sm_twitter, $sm_linkedin, $sm_youtube, $sm_github, $sm_id));


	if ($update) {
		header("Location:social-media.php?sm-update=yes");
	}else{
		header("Location:social-media.php?sm-update=no");
	}

}


?>