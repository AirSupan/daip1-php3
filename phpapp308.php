<?php
$role = 'subscriber';
$mesg = "";

switch($role ){
    case 'admin':
    $msg = 'Welcome, Admin';
    break;

    case 'editor':
    $msg = 'Article to edit';
    break;

    case 'subscriber':
    $msg = 'Check new Article';
    break;
    default:
    $msg = 'Sorry';

}

echo $msg;