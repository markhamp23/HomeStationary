<?php
//LLIBRERIA AMB FUNCIONS DE CONTROL DE DATES EN MYSQL
//MYSQL A DATE
date_default_timezone_set('Europe/Madrid');

function ToDate($MData) {
    if (($MData == "") or ($MData == "0000-00-00"))
    {return "";}
    else {return date("d/m/Y",strtotime($MData));}
}
function ToTime($MTime) {	
	$date = date("Y-m-d");
	$time = date("H:i:s");
    if (($MTime == "") or ($MTime == "0000-00-00 00:00:00"))		  
    {'ToTime';}
    else {return date("Y-m-d $time",strtotime($MTime));}
}
function ToDateTime($MDataTime) {
    $date = date("Y-m-d");
	$time = date("H:i:s");	
    if (($MDataTime) == "" or ($MDataTime == "0000-00-00 00:00:00"))
    {'ToDateTime';}
    else {return date("d/m/Y - H:i:s",strtotime($MDataTime));}
}

function AddPass($MPass) {
	if ($_POST['permissions'] == 1)   
	{return sha1($_POST['pass']);}		
	else			
    {return $_POST['pass'];}
}

?>



