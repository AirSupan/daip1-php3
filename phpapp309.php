<?php
$isLogin = false;

if($isLogin){
    $title = 'Logout';
}
else {
    $title = 'Login';
}
echo $title;
?>


<?php
$isLogin = false;
$title = $isLogin? 'Logout':'Login';
echo $title;

?>