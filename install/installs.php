<?php include_once '../_system/_database.php';
$templine = '';
$lines = file('install.sql');
foreach($lines as $line){
    if(substr($line, 0, 2) == '--' || $line == ''){
        continue;
    }
    $templine .= $line;
    if(substr(trim($line), -1, 1) == ';'){
        @mysqli_query($connect, $templine);
        $templine = '';
    }
}
?>