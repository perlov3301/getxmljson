<?php
function check($how1)
{
$users = array('-','-0','-0.','0.','.','0');
if (in_array($how1, $users))
 {
  return "<font color='red'>wrong number:it must be integer positive</font>";
;}
else 
 { return "<font color='green'>go on!</font>";
;}
}
if(isset($_GET['how1']))
{
echo check(trim($_GET['how1']));
}
?>
