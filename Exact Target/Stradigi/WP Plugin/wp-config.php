<?php

define('STRADIGI_CONFIG_STATE', 'DEV');	

switch(STRADIGI_CONFIG_STATE){
	case  'DEV' :
	include 'wp-config-dev.php';
	break;
	case 'LOCAL':
	include 'wp-config-local.php';
	break;
	case 'MASTER':
	include 'wp-config-master.php';
	break;
	default: 
	include 'wp-config-dev.php';
	break;
}