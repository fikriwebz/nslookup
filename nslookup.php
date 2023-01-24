<?php
  $domain = $_GET['domain'];
  $result = dns_get_record($domain);
  echo "IP: " . $result[0]['ip'] . "<br>";
  echo "TTL: " . $result[0]['ttl'] . "<br>";
  echo "Class: " . $result[0]['class'] . "<br>";
?>
