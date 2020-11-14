<?php
include('config.php');
$con = mysqli_connect($host, $username, $password, $database);
$form1 = '"'.$_POST['impnews-1'].'"';
$form2 = '"'.$_POST['impnews-2'].'"';
$form3 = '"'.$_POST['impnews-3'].'"';
$form4 = '"'.$_POST['impnews-4'].'"';
/*                           Изменение важных новостей                             */
$query1 = "
UPDATE `news`
SET `imp_place` = 1
WHERE `headliner` = {$form1}";

$query2 = "
UPDATE `news`
SET `imp_place` = 2
WHERE `headliner` = {$form2}";

$query3 = "
UPDATE `news`
SET `imp_place` = 3
WHERE `headliner` = {$form3}";

$query4 = "
UPDATE `news`
SET `imp_place` = 4
WHERE `headliner` = {$form4}";

$wipe1 = 
"
UPDATE `news`
SET `imp_place` = 0
WHERE `imp_place` = 1
";

$wipe2 = 
"
UPDATE `news`
SET `imp_place` = 0
WHERE `imp_place` = 2
";

$wipe3 = 
"
UPDATE `news`
SET `imp_place` = 0
WHERE `imp_place` = 3
";

$wipe4 = 
"
UPDATE `news`
SET `imp_place` = 0
WHERE `imp_place` = 4
";

$sqlwipe1 = "
UPDATE `news`
SET `imp_place`
";

mysqli_query($con, $wipe1);
mysqli_query($con, $query1);

mysqli_query($con, $wipe2);
mysqli_query($con, $query2);

mysqli_query($con, $wipe3);
mysqli_query($con, $query3);

mysqli_query($con, $wipe4);
mysqli_query($con, $query4);

mysqli_close($con);

echo "Новости успешно изменены"
?>