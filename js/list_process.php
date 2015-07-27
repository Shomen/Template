<?php session_start(); 
	$user=$_SESSION['user'];
	$type=$_SESSION['type'];
	//$dt=Date('d,m,y'); 
	
	
	$list_name=$_REQUEST['list_name'];
	$email=$_REQUEST['email'];
	
global $isExist;
	$isExist=0;
$return_json = '';
include('../include/config.php');	
require_once('../include/script.php'); 

	if($email=='0'){
		$isExist= dupli_check('subscriber','list_name',$list_name,$user,$type);
	}
	else{
		$isExist= double_dupli_check('subscriber','list_name',$list_name,'email',$email,$user,$type);
	}
	
/*if($isExist) 
 $isExist=='Yes';
else
 $isExist=='No';
*/ 
//$return_json = '{"isExist":"' . $isExist . '",';
$return_json = '{"isExist":"' . $isExist . '",';
$return_json = $return_json . '"type":"' . $type . '"}';
 
echo $return_json;

?>