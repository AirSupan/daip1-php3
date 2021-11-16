<?php
$age = 18;
$nationality = "Thailand";

if($nationality == "Thailand"){
    echo "Welcome, Thailand <br />";
    if($age >= 18){
        echo "Eligible to give vote";
    } else{
        echo "Not Eligible to give vote";
    }
}