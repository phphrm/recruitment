
<?php
include 'job_config.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
</head>
<body>
<center>
<?php // print_r( $response); ?><br><br>
<?php //print_r ($data1); ?>
<div class="container">    
	
    <?=$msg;?>
	<center>
	<img src="job.jpg" alt="Job" width="100%" height="350">
	
    <table class="styled-table">
    <thead>
        <tr>
				<th>Job Posted</th>
				 <th style="width:60%">Title</th>
				<th></th>
        </tr>
    </thead>
    <tbody>
         <?php
                foreach($data1['data']['job'] as $row){?>
                <tr>
                    <td><?php $date = $row['created_on'];
						$year = date('F j,Y', strtotime($date));
						echo $year;?></td>
                    <td><?php echo $row['title']; ?></td>
					<td><a href="rec.php?JobID=<?php echo $row['id']; ?>" >Apply For This Job!</a></td>
                </tr>
				
            <?}?>
    </tbody>
</table>

	</center>
	</div>
</body>
</html>

