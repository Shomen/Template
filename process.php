<?php 

$DB_NAME='eagleito_edb';
$DB_USER='eagleito_e_usedb';
$DB_PASSWORD='mh23@009';
$DB_HOST= 'localhost';

$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD);

	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
		
	mysql_select_db($DB_NAME,$con);


	$ival=$_REQUEST['ival'];	
	$page=$_REQUEST['page'];
	
	$sql="insert into ip_details(visited_page,ip,datetime)values('$page','$ival',DATE_FORMAT(NOW(),'%d %b %Y %hh %mm %ss'))";
	if (!mysql_query($sql))
	 echo mysql_error();
		

/*$return_json = '{"isExist":"' . $isExist . '",';
$return_json = $return_json . '"type":"' . $type . '"}';
 
echo $return_json;
*/

echo "Wrong page!!! ";
?>