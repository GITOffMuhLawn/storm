<!DOCTYPE html>
<html>
<body>
<p>This looks like trash I know but I'm not a web developer.</p>
<p><?php echo "hostname is: ".gethostname(); ?></p>
<p>
<?php
$server_ip = $_SERVER['SERVER_ADDR'];
echo "EC-2 Private IP Address Is: $server_ip";
?>
</p>
<p>
<?php
$myPublicIP = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
echo "EC-2 Public IP Is: ".$myPublicIP;
?>
</P>
<p>
<?php
echo "Showing the processes for httpd running in the below array to show this is running on apache:";
$output=null;
exec('ps -C httpd', $output);
print "<pre>";
print_r($output);
print "</pre>";
?>
</p>
<p>
<?php
echo "Showing the service status from system CONTROL:";
$httpd=null;
exec('systemctl status httpd', $httpd);
print "<pre>";
print_r($httpd);
print "</pre>";
?>
</p>
</body>
</html>
