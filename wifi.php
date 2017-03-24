<?php
$net = ($_REQUEST["net"]);
$pass = ($_REQUEST["pass"]);

echo "<pre>$net</pre>";
echo "<pre>$pass</pre>";

$ok = shell_exec("echo ****wpa-ssid $net >> interfaces");
$ok = shell_exec("echo ****wpa-psk $pass >> interfaces");
$ok = shell_exec("sed -ie 's/*/\ /g' interfaces");
$ok = shell_exec("rm -rf interfacese");
header("Location: index.php");
?>
