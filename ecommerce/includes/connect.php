<?php

$con=mysqli_connect('localhost','admin','admin','mystore');
if($con)
{
    echo "connection successful";
}
else
{
    echo "error";
}

?>