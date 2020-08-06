<?php

$connect = new mysqli("localhost","root","","cooperativadb","WEcl0105801567");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}