<?php
$dob="03-Nov-1999";
$today=date("y-m-d");
$diff=date_diff(date_create($dob),date_create($today));
echo "Age is ".$diff->format('%y');
?>
