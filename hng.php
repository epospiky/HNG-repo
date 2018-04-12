
<head>
	<link rel="stylesheet" type="text/css" href="style.css"></head>
<div class="body">
<div class="head">HNG Internship 4</div>
<div class="time">Time:

<?php
date_default_timezone_set('Africa/Lagos');
$utc_ts = strtotime("utc");
//$offset = date("Z");
$local_ts = $utc_ts ;
$local_time = date("g:i A");
echo  $local_time;

?>
</div>
</div>