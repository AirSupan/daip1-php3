<form method="POST" action="phpapp306.php">
    <label>Score: </label>
    <input type="text" name="num">
    <input type="submit" value="OK">
</form>
<hr/>

<?php
$num = 4;
switch ($num) {
    case 10:
        echo "number is equals to $num";
    break;

    case 8;
        echo "number is equals to $num";
        break;

    case 6:
        echo "number is equals to $num";
        break;

    default:
        echo "number is equals to $num";
        
}
?>