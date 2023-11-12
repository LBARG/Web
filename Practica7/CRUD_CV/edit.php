<?php
	require_once("db.php");
	if (isset($_POST['submit'])) {		
		$sql = $conn->prepare("UPDATE contact_me SET uname=? , email=? , Msubject=? , tmessage=?  WHERE id=?");
		$uname = $_POST['uname'];
		$email= $_POST['email'];
		$Msubject=$_POST['Msubject'];
		$tmessage=$_POST['tmessage'];
		$sql->bind_param("ssssi",$uname, $email,$Msubject,$tmessage,$_GET["id"]);	
		if($sql->execute()) {
			$success_message = "Edited Successfully";
		} else {
			$error_message = "Problem in Editing Record";
		}

	}
	$sql = $conn->prepare("SELECT * FROM contact_me WHERE id=?");
	$sql->bind_param("i",$_GET["id"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$conn->close();
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>Edit Contact Info</title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php" >Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Contact Info Edit</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>Name</label></td>
			<td><input type="text" name="uname" class="txtField" value="<?php echo $row["uname"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><input type="text" name="email" class="txtField" value="<?php echo $row["email"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Subject</label></td>
			<td><input type="text" name="Msubject" class="txtField" value="<?php echo $row["Msubject"]?>"></td>
		</tr>
		<tr class="table-row">
			<td><label>Message</label></td>
			<td><input type="text" name="tmessage" class="txtField" value="<?php echo $row["tmessage"]?>"></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>	
</table>
</form>
</body>
</html>