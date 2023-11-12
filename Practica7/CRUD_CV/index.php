<?php 
require_once("db.php");

$sql = "SELECT * FROM contact_me";
$result = $conn->query($sql);	
//$conn->close();		
?>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Contact Info</title>
</head>
<body>
	<div class="button_link"><a href="add.php">Add New</a></div>
	<table class="tbl-qa">	
		<thead>
			 <tr>
				<th class="table-header" width="20%"> Name </th>
				<th class="table-header" width="20%"> Email </th>
				<th class="table-header" width="20%">Subject </th>
				<th class="table-header" width="20%">Message</th>
				<th class="table-header" width="20%" colspan="2">Action</th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["uname"]; ?></td>
				<td class="table-row"><?php echo $row["email"]; ?></td>
				<td class="table-row"><?php echo $row["Msubject"]; ?></td>
				<td class="table-row"><?php echo $row["tmessage"]; ?></td>
				<!-- action -->
				<td class="table-row" colspan="2"><a href="edit.php?id=<?php echo $row["id"]; ?>" class="link"><img title="Edit" src="icon/edit.png"/></a> <a href="delete.php?id=<?php echo $row["id"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onClick="return confirm('Are you sure you want to delete?')" src="icon/delete.png"/></a></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>