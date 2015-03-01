<?php
 /**
 * api.php is a sample API file to be called via AJAX to 
 * deliver the contents of 2 JSON files, one of which orders the 
 * data by device popularity (% traffic using this device), the other by device type (mobile, desktop, tablet).
 *
 * The page can be called via AJAX either via GET or POST, using a variable 
 * named "sort":
 *
 * <code>
 * api.php?sort=device_type
 * </code>
 *
 * In the example above, the sort parameter is loaded with the string "device_type" 
 * which will indicate to the API to load the JSON file containing 
 * device type results.
 *
 * @package device-web-service
*/



if(isset($_REQUEST['sort']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['sort'])
	{//determine contents of 'sort'
		case "device_type":
			include('data/device_type.js'); //"device_type" orders by device type - desktop, tablet, mobile
			break;
		default:
			include('data/device.js'); //default orders by popularity - % traffic seen with the particular device	
			}
}else{//if no cat parameter set, inform calling application
	echo "Incorrect parameter sent";
}
