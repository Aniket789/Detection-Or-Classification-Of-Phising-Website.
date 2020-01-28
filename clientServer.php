<?php
header("Access-Control-Allow-Origin: *");
$site=$_POST['url'];
$decision=exec("python finalCode.py $site 3>&1 ");
echo $decision;
?>
