<?php
$conn = mysqli_connect('localhost','root','root','kin');
if (!$conn){
    echo 'Error' . mysqli_connect_error();
}