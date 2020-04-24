<?php 
exec('arp -a',$aIp);
echo "<table>";
foreach($aIp as $ipv){
   echo "<tr><td>".$ipv."</td></tr>";
}
echo "</table>";
/*foreach ($ipv as $value)
{   if($value=='Internet Address Physical Address Type'){
	   $value='网络地址 物理地址 类型';
	   echo $value . "<br>";
    }else{
	   echo $value . "<br>";
	}
}*/
/*$text = "Internet Address Physical Address Type";  
$str = explode(" ", $text);  
var_dump($str);  */
?>
