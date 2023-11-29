<?php

$con=new mysqli("localhost", "root", "", "attendance", 4306);
if(!$con){
    die(mysqli_error($con));
}