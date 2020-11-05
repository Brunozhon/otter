<?php
# Get the query strings from the reqeust
$callback = $_GET['callback'];
$_include = $_GET['req_type'];
# Include an api file
include $_include;
# Echo the result
echo $callback . "(" . $res . ")";
?>
