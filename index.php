<?php 
	
	require 'GameDB.php';
		
	if(isset($_REQUEST['action'])){ $action = $_REQUEST['action'];}else{ $action = '';}
	if(isset($_REQUEST['login'])){	$login = $_REQUEST['login'];}else{	$login = '';}
	if(isset($_REQUEST['password'])){ $password = $_REQUEST['password'];}else{ $password = '';}		
	if(isset($_REQUEST['points'])){ $points = $_REQUEST['points'];}else{ $points = '';}	
	if(isset($_REQUEST['level'])){	$level = $_REQUEST['level'];}else{	$level = '';}
	
	$gameDB = new gameDB();
	
	switch ($action){
		
		case 'login':
			
			$gameDB->set('login', $login);
			$gameDB->set('password', $password);
			
			$gameDB->playerLogin();
			
			break;
		
	}	
	
	
?>