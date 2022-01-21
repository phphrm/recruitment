<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$resume=$_FILES['resume'];
	$job_title=$_POST['job_title'];
	
}
else
{
echo "Thanks";	
exit();	
}
//print_r($resume);exit;
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // HR Url like https://www.abc.com/hr-folder
$post_data=array('resume'=> curl_file_create($resume['tmp_name'], $resume['type'], $resume['name']), 'name'=>$name,'contact'=>$contact,'email'=>$email,'job_title'=>$job_title);
$PHPHR = curl_init();
curl_setopt_array($PHPHR, array(
  CURLOPT_URL=>$WebURL.'/index.php/api/recruitment/add_candidate/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPHR);
curl_close($PHPHR);
header("Location:thanks.php");
exit();
//echo $response;
?>