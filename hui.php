<?php
$conn = mysqli_connect("localhost", "root", "12345678", "razum");
mysqli_set_charset($conn, 'utf8');
$mainquery = 'SELECT `headliner` FROM `news`';
$result = mysqli_query($conn, $mainquery);
mysqli_close($conn);
$array = array();
while ($rws = mysqli_fetch_assoc($result)) {
   $array[] = $rws;
}
echo $_SERVER['DOCUMENT_ROOT'];
?>
