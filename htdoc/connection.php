<?php
mysqli_connect("localhost","root","","");
mysqli_select_db('swe');

// Check connection
if(mysqli_connect_error())
{
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>