<?php
$start = date('y-m-d h:i:s');
// dharam changes addedd automatically by me on Friday
//$output1 = shell_exec('console\cake TestAlarm /dev/null &');
$output1 = shell_exec('D:\home\site\wwwroot\app\console\cake TestAlarm');
echo "output:".$output1; 
echo 'ok_shell';
echo '<br>'; 
echo '<br>';
echo 'end==>'.$start .'--'.date('y-m-d h:i:s');
exit;
?>
