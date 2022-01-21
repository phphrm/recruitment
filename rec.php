<?php
$JobID=$_REQUEST['JobID'];
include 'job_config.php';

?>


<!DOCTYPE html>
<html>
<head>
<title>Apply For Jobs</title>
</head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<center>


<table class="styled-table">
        <center>
        <tbody>
            <?php
                foreach($data1['data']['job'] as $row){ if($row['id']==$JobID) {?>
                <h1><?php echo $row['title']; ?></h1>
				<tr>
					<td colspan="2"><?php echo htmlspecialchars_decode($row['description']); ?></td>
				</tr>
				<tr>
					<td><b>Required Skills: </b><?php echo $row['req_skill']; ?></td>
				</tr>
				<tr>
					<td><b>Experiance Required: </b><?php echo $row['experiance']; ?></td>
				</tr>
				<tr>
					<td><b>Location: </b><?php echo $row['location']; ?></td>
				</tr>
				<tr>
					<td><b>Apply Before: </b><?php echo $row['expire_date']; ?></td>
				</tr>
				<?php }} ?>
        </tbody>
		</center>
    </table>
	<hr>

<h3>Job Application Form </h3>
</center>
  <form action="submit_phphr.php" method="post" enctype='multipart/form-data'>
     <input type="hidden" id="job_title" name="job_title" value="<?php echo $JobID;?>">
	 <input type="text" id="name" name="name" placeholder="Enter Full Name." required>
    <input type="text" id="email" name="email" placeholder="Enter Email Address." required>
    <input type="text" id="contact" name="contact" placeholder="Enter Phone Number." >
	  <label for="resume">Upload Resume*  </label>&nbsp&nbsp
	<input type="file" id="resume" name="resume" placeholder="Resume" /><br><br>
	
    <center><input type="submit" value="Apply For Job"></center>
  </form>
</div>
</body>
</html>

