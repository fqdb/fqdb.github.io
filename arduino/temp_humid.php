<html>
 <head>
  <title>Arduino</title>
 </head>
 <body>

<?php 
$fp = fopen ("/dev/rfcomm0", "r+");
if (!$fp) {
    echo 'not open';
}
else{
    echo 'port is open for read<br/>';
    echo fread($fp, 1024);
    fclose ($fp);
}
?>

 </body>
</html>