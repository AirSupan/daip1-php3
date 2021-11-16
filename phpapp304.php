<?php
$is_admin = true;
$can_app = true;

if($is_admin){
    echo "Welcome, Admin <br />";
    if($can_app){
        echo "Dashboard Manger";
    }
}