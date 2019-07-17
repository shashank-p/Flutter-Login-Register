<?php

$connect = new mysqli("localhost","root","password","db_name");

if($connect){
	 
}else{
	echo "Connection Failed";
	exit();
}