<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
$a = strtolower($_SERVER['HTTP_USER_AGENT']);
error_log($ip." | ".$a, 0);

print_r('<pre>');
print_r($_SERVER);
print_r('</pre>');