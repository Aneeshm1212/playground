<?php

$conn=new mysqli("localhost","root","", "bank_2");
if($conn){

	echo "Connection Established";
}
else
{
	echo "failed";
}

?>